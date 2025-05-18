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
     * Esta función pasa a la vista nurse.dashboard los datos de
     * las citas y los pacientes que tiene ese nurse
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

        //Se obtienen todos los pacientes que le corresponden a ese médico
        $pacients = User::whereHas('episodes', function ($q) use ($user) {
            $q->where('nurse_id', '=', $user->id);
        })->distinct()->get();

        //Se pasan la fecha, las citas y los pacientes a la vista nurse.dashboard
        return view('nurse.dashboard', ['date' => $date, 'dailyAppointments' => $dailyAppointments, 'myAppointments' => $myAppointments, 'pacients' => $pacients]);
    }

    /**
     * Summary of createDailyAppointments
     * @return string[]
     * Esta función crea citas cada 15 minutos de 9:00 a 15:00
     * y las devuelve en un array de citas
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

        //Se devuelven todas las citas de un día
        return $dailyAppointments;
    }

    /**
     * Summary of showMedicalRecord
     * @param mixed $pacient_id
     * @return \Illuminate\Contracts\View\View
     * Esta función devuelve la información de la ficha médica del
     * paciente que se consulta
     */
    public function showMedicalRecord($pacient_id)
    {
        //Se obtiene el paciente consultado y su información adicional
        $pacient = User::with('additionalUserInfo')->findOrFail($pacient_id);

        //Se obtienen las alergias del paciente que se consulta, las citas en las que se le han detectado y los medicamentos que las tratan
        $allergies = Allergy::select('allergies.*')
            ->join('appointments_allergies', 'allergies.id', '=', 'appointments_allergies.allergy_id')
            ->join('appointments', 'appointments_allergies.appointment_id', '=', 'appointments.id')
            ->join('episodes', 'appointments.episode_id', '=', 'episodes.id')
            ->where('episodes.pacient_id', '=', $pacient->id)
            ->distinct()->get();

        //Se obtienen las enfermedades del paciente que se consulta, las citas en las que se le han detectado y los medicamentos y vacunas que las curan
        $diseases = Disease::select('diseases.*')
            ->join('appointments_diseases', 'diseases.id', '=', 'appointments_diseases.disease_id')
            ->join('appointments', 'appointments_diseases.appointment_id', '=', 'appointments.id')
            ->join('episodes', 'appointments.episode_id', '=', 'episodes.id')
            ->where('episodes.pacient_id', '=', $pacient->id)
            ->distinct()->get();

        //Se obtienen los medicamentos del paciente que se consulta, las citas en las que se le han recetado y las enfermedades y alergias que tratan
        $medicines = Medicine::select('medicines.*')
            ->join('appointments_medicines', 'medicines.id', '=', 'appointments_medicines.medicine_id')
            ->join('appointments', 'appointments_medicines.appointment_id', '=', 'appointments.id')
            ->join('episodes', 'appointments.episode_id', '=', 'episodes.id')
            ->where('episodes.pacient_id', '=', $pacient->id)
            ->distinct()->get();

        //Se obtienen las vacunas del paciente que se consulta, las citas en las que se le han suministrado y las enfermedades que tratan
        $vaccines = Vaccine::select('vaccines.*')
            ->join('appointments_vaccines', 'vaccines.id', '=', 'appointments_vaccines.vaccine_id')
            ->join('appointments', 'appointments_vaccines.appointment_id', '=', 'appointments.id')
            ->join('episodes', 'appointments.episode_id', '=', 'episodes.id')
            ->where('episodes.pacient_id', '=', $pacient->id)
            ->distinct()->get();

        //Se devuelve la vista medical_record del paciente que se consulta con toda su información
        return view('nurse.pacients.medical_record', ['pacient' => $pacient, 'allergies' => $allergies, 'diseases' => $diseases, 'medicines' => $medicines, 'vaccines' => $vaccines]);
    }

    /**
     * Summary of showMedicalHistory
     * @param mixed $pacient_id
     * @return \Illuminate\Contracts\View\View
     * Esta función devuelve la información del historial médico del paciente que se consulta
     * que son todos los episodios de dicho paciente
     */
    public function showMedicalHistory($pacient_id)
    {
        //Se obtiene el usuario autenticado
        $user = auth()->user();

        //Se obtiene el paciente consultado
        $pacient = User::where('id', '=', $pacient_id)
            ->whereHas('episodes', function ($q) use ($user) {
                $q->where('nurse_id', '=', $user->id);
            })->firstOrFail();

        //Se obtienen todos los episodios del paciente consultado y se ordenan por fecha de creación
        $episodes = $pacient->episodes()->orderBy('created_at', 'desc')->get();

        //Se devuelve el historial médico del paciente consultado con todos los episodios
        return view('nurse.pacients.medical_history', ['episodes' => $episodes, 'pacient' => $pacient]);
    }

    /**
     * Summary of showEpisodeAppointments
     * @param mixed $episode_id
     * @return \Illuminate\Contracts\View\View
     * Esta función devuelve toda la información de todas las citas que pertenecen
     * al episodio elegido del paciente consultado
     */
    public function showEpisodeAppointments($episode_id)
    {
        //Se obtiene el episodio elegido
        $episode = Episode::with(['appointments'])->findOrFail($episode_id);

        //Se obtienen las citas del episodio ordenadas por fecha
        $appointments = $episode->appointments()->orderBy('date', 'desc')->get();

        //Se devuelve la vista de todas las citas del episodio consultado
        return view('nurse.episode_appointments', ['episode' => $episode, 'appointments' => $appointments]);
    }

}
