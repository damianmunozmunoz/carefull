<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Episode;
use App\Models\Allergy;
use App\Models\Medicine;
use App\Models\Disease;
use App\Models\Vaccine;
use App\Models\User;
use Carbon\Carbon;

class AppointmentController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $user = auth()->user();
        $date = $request->query('date');
        $time = $request->query('time');

        if($user->role == 'pacient'){
            return view('pacient.appointments.form', ['date' => $date, 'time' => $time]);
        } else {
            $pacients = User::whereHas('episodes', function($q) use ($user){
                $q->where('nurse_id', '=', $user->id);
            })->distinct()->get();
            
            return view('nurse.appointments.form', ['date' => $date, 'time' => $time, 'pacients' => $pacients]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        $role = $user->role;

        $date = $request->input('date');
        $time = $request->input('time');

        if($role == 'pacient'){
            $episode = Episode::where('pacient_id', '=', $user->id)->latest()->first();
        } else {
            $pacient_id = $request->input('pacient_id');

            $episode = Episode::where('pacient_id', '=', $pacient_id)->where('nurse_id', '=', $user->id)
            ->latest()->first();

            if(!$episode){
                $episode = Episode::create([
                    'name' => 'Sin episodio asignado',
                    'pacient_id' => $pacient_id,
                    'nurse_id' => $user->id
                ]);
            }
        }
        
        $appointment = new Appointment();
        $appointment->date = $date;
        $appointment->time = Carbon::parse($time)->format('H:i');
        $appointment->reason = $request->reason;
        $appointment->observations = null;
        $appointment->episode_id = $episode->id;
        $appointment->save();

        if ($request->has('allergy_ids')) {
            $appointment->allergies()->sync($request->allergy_ids);
        }

        if ($request->has('medicine_ids')) {
            $appointment->medicines()->sync($request->medicine_ids);
        }

        if ($request->has('disease_ids')) {
            $appointment->diseases()->sync($request->disease_ids);
        }

        if ($request->has('vaccine_ids')) {
            $appointment->vaccines()->sync($request->vaccine_ids);
        }

        if ($role == 'nurse') {
            return redirect()->route('nurse.dashboard');
        } else if ($role == 'pacient') {
            return redirect()->route('pacient.dashboard', ['date' => $date]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $appointment = Appointment::with(['allergies', 'vaccines', 'diseases', 'medicines', 'episode.pacient', 'episode.nurse'])->findOrFail($id);
        return view('pacient.appointments.show', ['appointment' => $appointment]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = auth()->user();
        $appointment = Appointment::with(['episode', 'allergies', 'vaccines', 'diseases', 'medicines'])->findOrFail($id);
        $pacient_id = $appointment->episode->pacient_id;

        if($user->role == 'nurse'){
            $episodes = Episode::where('nurse_id', '=', $user->id)->where('pacient_id', '=', $pacient_id)->get();
            $allergies = Allergy::all();
            $diseases = Disease::all();
            $medicines = Medicine::all();
            $vaccines = Vaccine::all();
        }

        return view('nurse.appointments.updateform', ['appointment' => $appointment, 'episodes' => $episodes, 'allergies' => $allergies, 'diseases' => $diseases, 'medicines' => $medicines, 'vaccines' => $vaccines]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->observations = $request->observations;
        $appointment->episode_id = $request->episode_id;
        $appointment->save();

        if ($request->has('allergy_ids')) {
            $appointment->allergies()->sync($request->allergy_ids);
        }

        if ($request->has('vaccine_ids')) {
            $appointment->vaccines()->sync($request->vaccine_ids);
        }

        if ($request->has('disease_ids')) {
            $appointment->diseases()->sync($request->disease_ids);
        }

        if ($request->has('medicine_ids')) {
            $appointment->medicines()->sync($request->medicine_ids);
        }

        return redirect()->route('nurse.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = auth()->user();
        $role = $user->role;

        $appointment = Appointment::findOrFail($id);
        $appointment->delete();

        if ($role == 'nurse') {
            return redirect()->route('nurse.dashboard');
        } else if ($role == 'pacient') {
            return redirect()->route('pacient.dashboard');
        }
    }
}
