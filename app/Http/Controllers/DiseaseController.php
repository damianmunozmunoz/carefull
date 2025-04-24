<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disease;

class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diseases = Disease::with(['appointments', 'medicines', 'vaccines'])->get();
        return view('diseases.index', $diseases);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $disease = Disease::with(['appointments', 'medicines', 'vaccines'])->findOrFail($id);
        return view('diseases.show', $disease);
    }
}
