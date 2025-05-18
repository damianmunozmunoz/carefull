<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaccine;
use App\Models\User;

class VaccineController extends Controller
{
    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\View
     * Devuelve la vista de todas las vacunas en la base de datos
     */
    public function index()
    {
        $vaccines = Vaccine::with(['appointments', 'diseases'])->get();
        return view('nurse.vaccines.all', ['vaccines' => $vaccines]);
    }

    /**
     * Summary of show
     * @param mixed $id
     * @return \Illuminate\Contracts\View\View
     * Devuelve la vista específica de una vacuna con los datos correspondientes
     */
    public function show($id)
    {
        //Se obtiene el usuario autenticado
        $nurse = auth()->user();

        //Se obtiene la vacuna elegida con las enfermedades para las que sirve
        $vaccine = Vaccine::with('diseases')->findOrFail($id);

        //Se obtienen los pacientes que llevan puesta esa vacuna
        $pacients = User::where('role', '=', 'pacient')
            ->whereHas('episodes', function ($q) use ($nurse, $vaccine) {
                $q->where('nurse_id', '=', $nurse->id)
                    ->whereHas('appointments', function ($appointmentq) use ($vaccine) {
                        $appointmentq->whereHas('vaccines', function ($vaccineq) use ($vaccine) {
                            $vaccineq->where('vaccines.id', '=', $vaccine->id);
                        });
                    });
            })->get();

        //Se devuelve la vista show de dicha vacuna con los datos de vacunas, enfermedades y pacientes
        return view('nurse.vaccines.show', ['vaccine' => $vaccine, 'pacients' => $pacients]);
    }

    /**
     * Summary of searchVaccine
     * @param \Illuminate\Http\Request $r
     * @return \Illuminate\Contracts\View\View
     * Devuelve la vista con todas las vacunas que coincidan con la búsqueda
     */
    public function searchVaccine(Request $r){
        //Se obtiene la búsqueda introducida por el usuario
        $search = $r->input('search');

        //Se guardan las vacunas que coincidan con la búsqueda
        $vaccines = Vaccine::where('name', 'like', "%$search%")->get();

        //Se devuelve la vista all con las vacunas de la búsqueda
        return view('nurse.vaccines.all', ['vaccines' => $vaccines]);
    }
}
