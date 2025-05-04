<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Appointment;
use App\Models\Episode;
use App\Models\User;

class PacientController extends Controller
{
    public function dashboard(Request $request){
        //Se obtiene el usuario autenticado
        $user = auth()->user();

        //Si en el request se pasa una fecha y no está vacía
        if ($request->has('date')) {
            //Se guarda la fecha introducida
            $date = $request->input('date');
        } else { //Si no
            //Se guarda la fecha de hoy
            $date = Carbon::today()->format('Y-m-d');
        }

        //Se busca el último episodio que ha tenido el paciente
        $episode = Episode::where('pacient_id', '=', $user->id)->latest()->first();
        
        //Si no tiene episodio todavía porque el paciente es nuevo
        if(!$episode){
            //Se guarda un médico inicial aleatoriamente de entre los registrados en la base de datos
            $nurse = User::where('role', '=', 'nurse')->inRandomOrder()->first();

            //Se crea un episodio inicial para el paciente con ese médico
            $episode = Episode::create([
                'name' => 'Sin episodio asignado',
                'pacient_id' => $user->id,
                'nurse_id' => $nurse->id
            ]);
        }

        //Se guardan las citas diarias
        $dailyAppointments = $this->createDailyAppointments();

        //Se guarda el id del médico del último episodio
        $nurse_id = $episode->nurse_id;

        //Se obtienen todas las citas disponibles y no disponibles del médico del último episodio para ese día en concreto
        $allAppointments = Appointment::with(['episode', 'allergies', 'medicines', 'diseases', 'vaccines'])->where('date', '=', $date)
        ->whereHas('episode', function ($q) use ($nurse_id){
            $q->where('nurse_id', '=', $nurse_id);
        })->get()->mapWithKeys(function ($appointment) {
            return [Carbon::parse($appointment->time)->format('H:i') => $appointment];
        });

        //Se obtienen las citas para esa fecha de ese paciente con el médico del últimio episodio
        $myAppointments = Appointment::with(['episode.nurse', 'allergies', 'medicines', 'diseases', 'vaccines'])->where('date', '=', $date)
        ->whereHas('episode', function($q) use ($user){
            $q->where('pacient_id', '=', $user->id);
        })->get()->mapWithKeys(function ($appointment) {
            return [Carbon::parse($appointment->time)->format('H:i') => $appointment];
        });

        return view('pacient.dashboard', ['date' => $date, 'dailyAppointments' => $dailyAppointments, 'allAppointments' => $allAppointments, 'myAppointments' => $myAppointments, 'nurse' => $episode->nurse]);
    }

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
/*
    public function medicalRecord(){
        $user = auth()->user();
        $user->load(['medicines', 'diseases', 'allergies', 'vaccines']);

        return view('pacient.medical_record', ['user' => $user]);
    }

    public function history(){
        $episodes = Episode::where('pacient_id', auth()->id())->orderBy('created_at', 'desc')->get();
        return view('pacient.history', ['episodes' => $episodes]);
    }
        */
}
