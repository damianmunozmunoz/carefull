<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaccine;

class VaccineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vaccines = Vaccine::with(['appointments', 'diseases'])->get();
        return view('vaccines.index', $vaccines);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vaccine = Vaccine::with(['appointments', 'diseases'])->findOrFail($id);
        return view('vaccines.show', $vaccine);
    }
}
