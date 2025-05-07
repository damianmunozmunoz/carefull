<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Appointment;
use App\Models\Medicine;
use App\Models\Disease;
use App\Models\Allergy;
use App\Models\Vaccine;
use App\Models\Episode;
use App\Models\User;

class NurseController extends Controller
{
    /**
     * Summary of dashboard
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\View
     * Esta función pasa a la vista nurse.dashboard los datos de las citas que tiene ese nurse
     */
    public function dashboard(Request $request)
    {
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
            ->whereHas('episode', function ($q) use ($user) {
                $q->where('nurse_id', '=', $user->id);
            })->get()->mapWithKeys(function ($appointment) {
                return [Carbon::parse($appointment->time)->format('H:i') => $appointment];
            });

        $pacients = User::whereHas('episodes', function ($q) use ($user) {
            $q->where('nurse_id', '=', $user->id);
        })->distinct()->get();

        return view('nurse.dashboard', ['date' => $date, 'dailyAppointments' => $dailyAppointments, 'myAppointments' => $myAppointments, 'pacients' => $pacients]);
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

    public function showMedicalRecord($pacient_id)
    {
        $pacient = User::with('additionalUserInfo')->findOrFail($pacient_id);

        // Alergias
        $allergies = Allergy::select('allergies.*')
            ->join('appointments_allergies', 'allergies.id', '=', 'appointments_allergies.allergy_id')
            ->join('appointments', 'appointments_allergies.appointment_id', '=', 'appointments.id')
            ->join('episodes', 'appointments.episode_id', '=', 'episodes.id')
            ->where('episodes.pacient_id', '=', $pacient->id)
            ->distinct()->get();

        // Enfermedades
        $diseases = Disease::select('diseases.*')
            ->join('appointments_diseases', 'diseases.id', '=', 'appointments_diseases.disease_id')
            ->join('appointments', 'appointments_diseases.appointment_id', '=', 'appointments.id')
            ->join('episodes', 'appointments.episode_id', '=', 'episodes.id')
            ->where('episodes.pacient_id', '=', $pacient->id)
            ->distinct()->get();

        // Medicamentos
        $medicines = Medicine::select('medicines.*')
            ->join('appointments_medicines', 'medicines.id', '=', 'appointments_medicines.medicine_id')
            ->join('appointments', 'appointments_medicines.appointment_id', '=', 'appointments.id')
            ->join('episodes', 'appointments.episode_id', '=', 'episodes.id')
            ->where('episodes.pacient_id', '=', $pacient->id)
            ->distinct()->get();

        // Vacunas
        $vaccines = Vaccine::select('vaccines.*')
            ->join('appointments_vaccines', 'vaccines.id', '=', 'appointments_vaccines.vaccine_id')
            ->join('appointments', 'appointments_vaccines.appointment_id', '=', 'appointments.id')
            ->join('episodes', 'appointments.episode_id', '=', 'episodes.id')
            ->where('episodes.pacient_id', '=', $pacient->id)
            ->distinct()->get();

        return view('nurse.pacients.medical_record', ['pacient' => $pacient, 'allergies' => $allergies, 'diseases' => $diseases, 'medicines' => $medicines, 'vaccines' => $vaccines]);
    }

    // NurseController.php

    public function showMedicalHistory($pacient_id)
    {
        $nurse = auth()->user();

        $pacient = User::where('id', '=', $pacient_id)
            ->whereHas('episodes', function ($q) use ($nurse) {
                $q->where('nurse_id', '=', $nurse->id);
            })->firstOrFail();

        $episodes = $pacient->episodes()->orderBy('created_at', 'desc')->get();

        return view('nurse.pacients.medical_history', ['episodes' => $episodes, 'pacient' => $pacient]);
    }

    public function showEpisodeAppointments($episode_id)
    {
        $episode = Episode::with(['appointments'])->findOrFail($episode_id);
        
        $appointments = $episode->appointments()->orderBy('date')->get();

        return view('nurse.episode_appointments', ['episode' => $episode, 'appointments' => $appointments]);
    }

}
