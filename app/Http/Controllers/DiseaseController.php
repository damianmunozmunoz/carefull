<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disease;
use App\Models\User;

class DiseaseController extends Controller
{
    public function index()
    {
        $diseases = Disease::with(['appointments', 'medicines', 'vaccines'])->get();
        return view('nurse.diseases.all', ['diseases' => $diseases]);
    }

    public function show($id)
    {
        $nurse = auth()->user();

        $disease = Disease::with(['medicines', 'vaccines'])->findOrFail($id);

        $pacients = User::where('role', '=', 'pacient')
            ->whereHas('episodes', function ($q) use ($nurse, $disease) {
                $q->where('nurse_id', '=', $nurse->id)
                    ->whereHas('appointments', function ($appointmentq) use ($disease) {
                        $appointmentq->whereHas('diseases', function ($diseaseq) use ($disease) {
                            $diseaseq->where('diseases.id', '=', $disease->id);
                        });
                    });
            })->get();

        return view('nurse.diseases.show', ['disease' => $disease, 'pacients' => $pacients]);
    }

}
