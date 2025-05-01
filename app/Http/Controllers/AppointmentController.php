<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Carbon\Carbon;

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

        $role = auth()->user()->role;

        if ($role == 'nurse') {
            return redirect()->route('nurse.dashboard');
        } else if ($role == 'pacient') {
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

    /**
     * Summary of createDailyAppointments
     * @return string[]
     * Esta función crea citas cada 15 minutos de 9:00 a 15:00 y las devuelve en un array.
     */
    private function createDailyAppointments()
    {
        //Se establece un comienzo del turno
        $beginning = Carbon::createFromTime(9, 0);
        //Se establece un final del turno
        $end = Carbon::createFromTime(15, 0);
        //Se declara un array para guardar las citas
        $dailyAppointments = [];

        while ($beginning < $end) { //Mientras el comienzo sea menor que el final
            //Se guardan las citas con formato en el array
            $dailyAppointments[] = $beginning->format('H:i');
            //Se suman 15 minutos al comienzo
            $beginning->addMinutes(15);
        }

        return $dailyAppointments;
    }

    public function drawAppointments(Request $request)
    {
        //Se obtiene el usuario autenticado
        $user = auth()->user();
        //Se obtiene el rol del usuario
        $role = $user->role;

        //Si en el request se pasa una fecha y no está vacía
        if ($request->has('date') && !empty($request->input('date'))) {
            //Se guarda la fecha introducida
            $date = $request->input('date');
        } else { //Si no
            //Se guarda la fecha de hoy
            $date = Carbon::today()->format('Y-m-d');
        }

        //Se guardan las citas diarias
        $dailyAppointments = $this->createDailyAppointments();

        //Se obtienen las citas para esa fecha con el paciente y el médico
        $allDailyAppointments = Appointment::with(['episode.pacient', 'episode.nurse'])->where('date', $date)->get();

        //Se controla cual es el rol del usuario
        if ($role == 'pacient') {
            //Se consultan todas las citas con ese pacient_id y se ordenan por fecha
            $myAppointments = Appointment::whereHas('episode', function ($consulta) use ($user) {
                $consulta->where('pacient_id', '=', $user->id);
            })->orderBy('date', 'desc')->get();
        } else {
            //Se consultan todas las citas con ese nurse_id y se ordenan por fecha
            $myAppointments = Appointment::whereHas('episode', function ($consulta) use ($user) {
                $consulta->where('nurse_id', '=', $user->id);
            })->orderBy('date', 'desc')->get();
        }

        return view(`{$role}.dashboard`, ['date' => $date, 'dailyAppointments' => $dailyAppointments, 'allDailyAppointments' => $allDailyAppointments, 'myAppointments' => $myAppointments]);
    }
}
