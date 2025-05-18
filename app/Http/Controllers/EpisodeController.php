<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Episode;

class EpisodeController extends Controller
{
    public function index()
    {
        $episodes = Episode::all();
        return view('episodes.index', $episodes);
    }

    public function create(Request $request)
    {
        $pacient_id = $request->query('pacient_id');
        $appointment_id = $request->query('appointment_id');
        return view('nurse.episodes.form', ['pacient_id' => $pacient_id, 'appointment_id' => $appointment_id]);
    }

    public function store(Request $request)
    {
        $episode = Episode::create([
            'name' => $request->input('name'),
            'nurse_id' => auth()->id(),
            'pacient_id' => $request->query('pacient_id'), // Usamos query string
        ]);

        return redirect()->route('nurse.appointments.edit', $request->appointment_id);
    }

    public function show(string $id)
    {
        $episode = Episode::with(['appointments.allergies', 'appointments.medicines', 'appointments.vaccines', 'appointments.diseases'])->findOrFail($id);
        return view('appointments.index', $episode);
    }

    public function edit(string $id)
    {
        $episode = Episode::findOrFail($id);
        return view('episodes.form');
    }

    public function update(Request $request, string $id)
    {
        $e = Episode::findOrFail($id);
        $e->name = $request->name;
        $e->patient_id = $request->patient_id;
        $e->nurse_id = $request->nurse_id;
        $e->save();

        return redirect()->route('episodes.index');
    }

    public function destroy(string $id)
    {
        $e = Episode::findOrFail($id);
        $e->delete();

        return redirect()->route('episodes.index');
    }
}
