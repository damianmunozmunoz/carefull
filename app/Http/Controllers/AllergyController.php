<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allergy;
use App\Models\User;

class AllergyController extends Controller
{
    public function index()
    {
        $allergies = Allergy::with(['appointments', 'medicines'])->get();
        return view('nurse.allergies.all', ['allergies' => $allergies]);
    }

    public function show($id)
    {
        $nurse = auth()->user();

        $allergy = Allergy::with('medicines')->findOrFail($id);

        $pacients = User::where('role', '=', 'pacient')
            ->whereHas('episodes', function ($q) use ($nurse, $allergy) {
                $q->where('nurse_id', '=', $nurse->id)
                    ->whereHas('appointments', function ($appointmentq) use ($allergy) {
                        $appointmentq->whereHas('allergies', function ($allergyq) use ($allergy) {
                            $allergyq->where('allergies.id', '=', $allergy->id);
                        });
                    });
            })->get();

        return view('nurse.allergies.show', ['allergy' => $allergy, 'pacients' => $pacients]);
    }

}
