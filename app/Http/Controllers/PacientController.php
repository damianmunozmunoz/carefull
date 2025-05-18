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

class PacientController extends Controller
{
    /**
     * Summary of dashboard
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\View\View
     * Esta función pasa a la vista pacient.dashboard los datos de
     * las citas que tiene ese pacient
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

        //Se busca el último episodio que ha tenido el paciente
        $episode = Episode::where('pacient_id', '=', $user->id)->latest()->first();

        //Si no tiene episodio todavía porque el paciente es nuevo
        if (!$episode) {
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
            ->whereHas('episode', function ($q) use ($nurse_id) {
                $q->where('nurse_id', '=', $nurse_id);
            })->get()->mapWithKeys(function ($appointment) {
                return [Carbon::parse($appointment->time)->format('H:i') => $appointment];
            });

        //Se obtienen las citas para esa fecha de ese paciente con el médico del último episodio
        $myAppointments = Appointment::with(['episode.nurse', 'allergies', 'medicines', 'diseases', 'vaccines'])->where('date', '=', $date)
            ->whereHas('episode', function ($q) use ($user) {
                $q->where('pacient_id', '=', $user->id);
            })->get()->mapWithKeys(function ($appointment) {
                return [Carbon::parse($appointment->time)->format('H:i') => $appointment];
            });

        //Se pasan la fecha, las citas y el médico del último episodio a la vista pacient.dashboard
        return view('pacient.dashboard', ['date' => $date, 'dailyAppointments' => $dailyAppointments, 'allAppointments' => $allAppointments, 'myAppointments' => $myAppointments, 'nurse' => $episode->nurse]);
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
     * Summary of medicalRecord
     * @return \Illuminate\Contracts\View\View
     * Esta función devuelve la información de la ficha médica
     * del usuario
     */
    public function medicalRecord()
    {
        //Se obtiene el usuario autenticado
        $user = auth()->user();

        //Se obtiene la información adicional del usuario
        $userinfo = User::with('additionalUserInfo')->findOrFail($user->id);

        //Se obtienen las alergias del usuario, las citas en las que se le ha detectado y los medicamentos que las tratan
        $allergies = Allergy::select('allergies.*')
            ->join('appointments_allergies', 'allergies.id', '=', 'appointments_allergies.allergy_id')
            ->join('appointments', 'appointments_allergies.appointment_id', '=', 'appointments.id')
            ->join('episodes', 'appointments.episode_id', '=', 'episodes.id')
            ->where('episodes.pacient_id', '=', $user->id)
            ->distinct()->get();

        //Se obtienen las enfermedades del usuario, las citas en las que se le han detectado y los medicamentos y vacunas que las tratan
        $diseases = Disease::select('diseases.*')
            ->join('appointments_diseases', 'diseases.id', '=', 'appointments_diseases.disease_id')
            ->join('appointments', 'appointments_diseases.appointment_id', '=', 'appointments.id')
            ->join('episodes', 'appointments.episode_id', '=', 'episodes.id')
            ->where('episodes.pacient_id', '=', $user->id)
            ->distinct()->get();

        //Se obtienen los medicamentos del usuario, las citas en las que se le han recetado y las enfermedades y alergias que tratan
        $medicines = Medicine::select('medicines.*')
            ->join('appointments_medicines', 'medicines.id', '=', 'appointments_medicines.medicine_id')
            ->join('appointments', 'appointments_medicines.appointment_id', '=', 'appointments.id')
            ->join('episodes', 'appointments.episode_id', '=', 'episodes.id')
            ->where('episodes.pacient_id', '=', $user->id)
            ->distinct()->get();

        //Se obtienen las vacunas del usuario, las citas en las que se le han suministrado y las enfermedades que tratan
        $vaccines = Vaccine::select('vaccines.*')
            ->join('appointments_vaccines', 'vaccines.id', '=', 'appointments_vaccines.vaccine_id')
            ->join('appointments', 'appointments_vaccines.appointment_id', '=', 'appointments.id')
            ->join('episodes', 'appointments.episode_id', '=', 'episodes.id')
            ->where('episodes.pacient_id', '=', $user->id)
            ->distinct()->get();

        //Se devuelve la vista medical_record del usuario con toda su información
        return view('pacient.medical_record', ['user' => $user, 'userinfo' => $userinfo, 'allergies' => $allergies, 'diseases' => $diseases, 'medicines' => $medicines, 'vaccines' => $vaccines]);
    }

    /**
     * Summary of medicalHistory
     * @return \Illuminate\Contracts\View\View
     * Esta función devuelve la información del historial médico del usuario
     * que son todos los episodios del propio usuario
     */
    public function medicalHistory()
    {
        //Se obtiene el usuario autenticado
        $user = auth()->user();

        //Se obtienen todos los episodios del usuario y se ordenan por fecha de creación
        $episodes = $user->episodes()->orderBy('created_at', 'desc')->get();

        //Se devuelve el historial médico del usuario con todos los episodios
        return view('pacient.medical_history', ['episodes' => $episodes]);
    }

    /**
     * Summary of showEpisodeAppointments
     * @param mixed $episode_id
     * @return \Illuminate\Contracts\View\View
     * Esta función devuelve toda la información de todas las citas que pertenecen
     * al episodio elegido del usuario
     */
    public function showEpisodeAppointments($episode_id)
    {
        //Se obtiene el usuario autenticado
        $user = auth()->user();

        //Se obtiene el episodio elegido del usuario 
        $episode = $user->episodes()->where('id', $episode_id)->firstOrFail();

        //Se obtienen las citas del episodio ordenadas por fecha
        $appointments = $episode->appointments()->with(['allergies', 'diseases', 'vaccines', 'medicines'])
            ->orderBy('date')->orderBy('time')->get();

        //Se devuelve la vista de todas las citas del episodio consultado
        return view('pacient.episode_appointments', ['episode' => $episode, 'appointments' => $appointments]);
    }
}
