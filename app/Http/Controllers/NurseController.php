<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Carbon\Carbon;

class NurseController extends Controller
{
    /**
     * Summary of dashboard
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\View
     * Esta función pasa a la vista nurse.dashboard los datos de las citas que tiene ese nurse
     */
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

        //Se guardan las citas diarias
        $dailyAppointments = $this->createDailyAppointments();

        //Se obtienen las citas para esa fecha de ese médico con los pacientes
        $myAppointments = Appointment::with(['episode.pacient', 'allergies', 'medicines', 'diseases', 'vaccines'])->where('date', $date)
        ->whereHas('episode', function($q) use ($user){
            $q->where('nurse_id', '=', $user->id);
        })->get()->mapWithKeys(function ($appointment) {
            return [Carbon::parse($appointment->time)->format('H:i') => $appointment];
        });

        return view('nurse.dashboard', ['date' => $date, 'dailyAppointments' => $dailyAppointments, 'myAppointments' => $myAppointments]);
    }

    /**
     * Summary of createDailyAppointments
     * @return string[]
     * Esta función crea citas cada 15 minutos de 9:00 a 15:00 y las devuelve en un array de citas
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
}
