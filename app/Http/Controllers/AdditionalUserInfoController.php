<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdditionalUserInfo;

class AdditionalUserInfoController extends Controller
{
    public function edit()
    {
        $user = auth()->user();
        $info = $user->additionalUserInfo;

        return view('additional_user_info', ['info' => $info]);
    }

    public function update(Request $request)
    {
        $user = auth()->user();
        $role = $user->role;
        $info = $user->additionalUserInfo;

        $info->borndate = $request->borndate;
        $info->gender = $request->gender;
        $info->address = $request->address;
        $info->phone_number = $request->phone_number;
        $info->save();

        if ($role == 'nurse') {
            return redirect()->route('nurse.dashboard');
        } else if ($role == 'pacient') {
            return redirect()->route('pacient.dashboard');
        }
    }
}
