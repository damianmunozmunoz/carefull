<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaccine;
use App\Models\User;

class VaccineController extends Controller
{
    public function index()
    {
        $vaccines = Vaccine::with(['appointments', 'diseases'])->get();
        return view('nurse.vaccines.all', ['vaccines' => $vaccines]);
    }

    public function show($id)
    {
        $nurse = auth()->user();

        $vaccine = Vaccine::with('diseases')->findOrFail($id);

        $pacients = User::where('role', '=', 'pacient')
            ->whereHas('episodes', function ($q) use ($nurse, $vaccine) {
                $q->where('nurse_id', '=', $nurse->id)
                    ->whereHas('appointments', function ($appointmentq) use ($vaccine) {
                        $appointmentq->whereHas('vaccines', function ($vaccineq) use ($vaccine) {
                            $vaccineq->where('vaccines.id', '=', $vaccine->id);
                        });
                    });
            })->get();

        return view('nurse.vaccines.show', ['vaccine' => $vaccine, 'pacients' => $pacients]);
    }

}
