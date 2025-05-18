<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allergy;
use App\Models\User;

class AllergyController extends Controller
{
    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\View
     * Devuelve la vista de todas las alergias en la base de datos
     */
    public function index()
    {
        $allergies = Allergy::with(['appointments', 'medicines'])->get();
        return view('nurse.allergies.all', ['allergies' => $allergies]);
    }

    /**
     * Summary of show
     * @param mixed $id
     * @return \Illuminate\Contracts\View\View
     * Devuelve la vista específica de una alergia con los datos correspondientes
     */
    public function show($id)
    {
        //Se obtiene el usuario autenticado
        $nurse = auth()->user();

        //Se obtiene la alergia elegida con los medicamentos que la tratan
        $allergy = Allergy::with('medicines')->findOrFail($id);

        //Se obtienen los pacientes que padecen dicha alergia
        $pacients = User::where('role', '=', 'pacient')
            ->whereHas('episodes', function ($q) use ($nurse, $allergy) {
                $q->where('nurse_id', '=', $nurse->id)
                    ->whereHas('appointments', function ($appointmentq) use ($allergy) {
                        $appointmentq->whereHas('allergies', function ($allergyq) use ($allergy) {
                            $allergyq->where('allergies.id', '=', $allergy->id);
                        });
                    });
            })->get();

        //Se devuelve la vista show de dicha alergia con los datos de alergias, medicamentos y pacientes
        return view('nurse.allergies.show', ['allergy' => $allergy, 'pacients' => $pacients]);
    }

    /**
     * Summary of searchAllergy
     * @param \Illuminate\Http\Request $r
     * @return \Illuminate\Contracts\View\View
     * Devuelve la vista con todas las alergias que coincidan con la búsqueda
     */
    public function searchAllergy(Request $r){
        //Se obtiene la búsqueda introducida por el usuario
        $search = $r->input('search');

        //Se guardan las alergias que coincidan con la búsqueda
        $allergies = Allergy::where('name', 'like', "%$search%")->get();

        //Se devuelve la vista all con las alergias de la búsqueda
        return view('nurse.allergies.all', ['allergies' => $allergies]);
    }
}
