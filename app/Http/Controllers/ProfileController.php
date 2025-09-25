<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function edit() {
        
        $user = Auth::user();
        return view ('edit', compact('user'));
    }

    //Code to handle the edit profile
    public function update(Request $request) {
        $user = Auth::user();

        $request->validate([
            'name'=>'required|unique:users,name,'.$user->id,
            'email'=>'required|email|unique:users,email,'.$user->id,
            'password'=>'nullable|min:6|confirmed',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) { //this line is for, if a user actually types in the textfield then only updates the passsword
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('edit')->with('success','Profile has been updated successfully!');
    }
}

