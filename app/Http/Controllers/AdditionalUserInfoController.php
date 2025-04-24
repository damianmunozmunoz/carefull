<?php

namespace App\Http\Controllers;

use App\Models\AdditionalUserInfo;
use Illuminate\Http\Request;

class AdditionalUserInfoController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('infos.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $i = new AdditionalUserInfo();
        $i->borndate = $request->borndate;
        $i->gender = $request->gender;
        $i->address = $request->gender;
        $i->phone_number = $request->phone_number;
        $i->user_id = $request->user_id;
        $i->save();

        $role = auth()->user()->role;

        if($role == 'nurse'){
            return redirect()->route('nurse.dashboard');
        } else if($role == 'pacient'){
            return redirect()->route('pacient.dashboard');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $info = AdditionalUserInfo::findOrFail($id);
        return view('infos.show', $info);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $info = AdditionalUserInfo::findOrFail($id);
        return view('infos.form', $info);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $i = AdditionalUserInfo::find($id);
        $i->borndate = $request->borndate;
        $i->gender = $request->gender;
        $i->address = $request->gender;
        $i->phone_number = $request->phone_number;
        $i->user_id = $request->user_id;
        $i->save();

        $role = auth()->user()->role;

        if($role == 'nurse'){
            return redirect()->route('nurse.dashboard');
        } else if($role == 'pacient'){
            return redirect()->route('pacient.dashboard');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $i = AdditionalUserInfo::findOrFail($id);
        $i ->delete();

        $role = auth()->user()->role;

        if($role == 'nurse'){
            return redirect()->route('nurse.dashboard');
        } else if($role == 'pacient'){
            return redirect()->route('pacient.dashboard');
        }
    }
}
