<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allergy;

class AllergyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allergies = Allergy::with(['appointments', 'medicines'])->get();
        return view('allergies.index', $allergies);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $allergy = Allergy::with(['appointments', 'medicines'])->findOrFail($id);
        return view('allergies.show', $allergy);
    }
}
