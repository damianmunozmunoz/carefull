<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Episode;

class EpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $episodes = Episode::all();
        return view('episodes.index', $episodes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('episodes.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $e = new Episode();
        $e->name = $request->name;
        $e->patient_id = $request->patient_id;
        $e->nurse_id = $request->nurse_id;
        $e->save();

        return redirect()->route('episodes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $episode = Episode::findOrFail($id);
        return view('appointments.index', $episode);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $episode = Episode::findOrFail($id);
        return view('episodes.form');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $e = Episode::findOrFail($id);
        $e->name = $request->name;
        $e->patient_id = $request->patient_id;
        $e->nurse_id = $request->nurse_id;
        $e->save();

        return redirect()->route('episodes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $e = Episode::findOrFail($id);
        $e->delete();

        return redirect()->route('episodes.index');
    }
}
