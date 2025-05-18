<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\User;

class MedicineController extends Controller
{
    /**
     * Summary of index
     * @return \Illuminate\Contracts\View\View
     * Devuelve la vista de todos los medicamentos en la base de datos
     */
    public function index()
    {
        $medicines = Medicine::with(['appointments', 'diseases', 'allergies'])->get();
        return view('nurse.medicines.all', ['medicines' => $medicines]);
    }

    /**
     * Summary of show
     * @param mixed $id
     * @return \Illuminate\Contracts\View\View
     * Devuelve la vista específica de un medicamento con los datos correspondientes
     */
    public function show($id)
    {
        //Se obtiene el usuario autenticado
        $nurse = auth()->user();

        //Se obtiene el medicamento elegido con las enfermedades y alergias para las que sirve
        $medicine = Medicine::with(['diseases', 'allergies'])->findOrFail($id);

        $pacients = User::where('role', '=', 'pacient')
            ->whereHas('episodes', function ($q) use ($nurse, $medicine) {
                $q->where('nurse_id', '=', $nurse->id)
                    ->whereHas('appointments', function ($appointmentq) use ($medicine) {
                        $appointmentq->whereHas('medicines', function ($medicineq) use ($medicine) {
                            $medicineq->where('medicines.id', '=', $medicine->id);
                        });
                    });
            })->get();

        return view('nurse.medicines.show', ['medicine' => $medicine, 'pacients' => $pacients]);
    }

    /**
     * Summary of searchMedicine
     * @param \Illuminate\Http\Request $r
     * @return \Illuminate\Contracts\View\View
     * Devuelve la vista con todos los medicamentos que coincidan con la búsqueda
     */
    public function searchMedicine(Request $r){
        //Se obtiene la búsqueda introducida por el usuario
        $search = $r->input('search');

        //Se guardan los medicamentos que coincidan con la búsqueda
        $medicines = Medicine::where('name', 'like', "%$search%")->get();

        //Se devuelve la vista all con los medicamentos de la búsqueda
        return view('nurse.medicines.all', ['medicines' => $medicines]);
    }
}
