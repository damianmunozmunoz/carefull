<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicines = Medicine::with(['appointments', 'diseases', 'allergies'])->get();
        return view('medicines.index', $medicines);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $medicine = Medicine::with(['appointments', 'diseases', 'allergies'])->findOrFail($id);
        return view('medicines.show', $medicine);
    }
}
