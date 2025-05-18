<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disease;
use App\Models\User;

class DiseaseController extends Controller
{
    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\View
     * Devuelve la vista de todas las enfermedades en la base de datos
     */
    public function index()
    {
        $diseases = Disease::with(['appointments', 'medicines', 'vaccines'])->get();
        return view('nurse.diseases.all', ['diseases' => $diseases]);
    }

    /**
     * Summary of show
     * @param mixed $id
     * @return \Illuminate\Contracts\View\View
     * Devuelve la vista específica de una enfermedad con los datos correspondientes
     */
    public function show($id)
    {
        //Se obtiene el usuario autenticado
        $nurse = auth()->user();

        //Se obtiene la enfermedad elegida con los medicamentos y vacunas que la tratan
        $disease = Disease::with(['medicines', 'vaccines'])->findOrFail($id);

        //Se obtienen los pacientes que han padecido dicha enfermedad
        $pacients = User::where('role', '=', 'pacient')
            ->whereHas('episodes', function ($q) use ($nurse, $disease) {
                $q->where('nurse_id', '=', $nurse->id)
                    ->whereHas('appointments', function ($appointmentq) use ($disease) {
                        $appointmentq->whereHas('diseases', function ($diseaseq) use ($disease) {
                            $diseaseq->where('diseases.id', '=', $disease->id);
                        });
                    });
            })->get();

        //Se devuelve la vista show de dicha enfermedad con los datos de enfermedades, medicamentos, vacunas y pacientes
        return view('nurse.diseases.show', ['disease' => $disease, 'pacients' => $pacients]);
    }

    /**
     * Summary of searchDisease
     * @param \Illuminate\Http\Request $r
     * @return \Illuminate\Contracts\View\View
     * Devuelve la vista con todas las enfermedades que coincidan con la búsqueda
     */
    public function searchDisease(Request $r){
        //Se obtiene la búsqueda introducida por el usuario
        $search = $r->input('search');

        //Se guardan las enfermedades que coincidan con la búsqueda
        $diseases = Disease::where('name', 'like', "%$search%")->get();

        //Se devuelve la vista all con las enfermedades de la búsqueda
        return view('nurse.diseases.all', ['diseases' => $diseases]);
    }
}
