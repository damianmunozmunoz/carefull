<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::with(['allergies', 'vaccines', 'diseases', 'medicines', 'episodes'])->get();
        return view('appointments.index', $appointments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('appointments.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $appointment = new Appointment();
        $appointment->date = $request->date;
        $appointment->time = $request->time;
        $appointment->reason = $request->reason;
        $appointment->observations = $request->observations;
        $appointment->episode_id = $request->episode_id;
        $appointment->save();

        if($request->has('allergy_ids')){
            $appointment->allergies()->sync($request->allergy_ids);
        }

        if($request->has('medicine_ids')){
            $appointment->medicines()->sync($request->medicine_ids);
        }

        if($request->has('disease_ids')){
            $appointment->diseases()->sync($request->disease_ids);
        }

        if($request->has('vaccine_ids')){
            $appointment->vaccines()->sync($request->vaccine_ids);
        }

        $role = auth()->user()->role;

        if($role == 'nurse'){
            return redirect()->route('nurse.dashboard');
        } else if($role == 'pacient'){
            return redirect()->route('pacient.dashboard');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $appointment = Appointment::with(['allergies', 'vaccines', 'diseases', 'medicines', 'episodes'])->findOrFail($id);
        return view('appointments.show', $appointment);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $appointment = Appointment::with(['allergies', 'vaccines', 'diseases', 'medicines'])->findOrFail($id);
        return view('appointments.form', $appointment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->date = $request->date;
        $appointment->time = $request->time;
        $appointment->reason = $request->reason;
        $appointment->observations = $request->observations;
        $appointment->episode_id = $request->episode_id;
        $appointment->save();

        if($request->has('allergy_ids')){
            $appointment->allergies()->sync($request->allergy_ids);
        }

        if($request->has('vaccine_ids')){
            $appointment->vaccines()->sync($request->vaccine_ids);
        }

        if($request->has('disease_ids')){
            $appointment->diseases()->sync($request->disease_ids);
        }

        if($request->has('medicine_ids')){
            $appointment->medicines()->sync($request->medicine_ids);
        }

        return redirect()->route('appointments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();

        return redirect()->route('appointments.index');
    }
}
