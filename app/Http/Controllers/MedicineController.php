<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\User;

class MedicineController extends Controller
{
    public function index()
    {
        $medicines = Medicine::with(['appointments', 'diseases', 'allergies'])->get();
        return view('nurse.medicines.all', ['medicines' => $medicines]);
    }

    public function show($id)
    {
        $nurse = auth()->user();

        $medicine = Medicine::with('diseases')->findOrFail($id);

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

}
