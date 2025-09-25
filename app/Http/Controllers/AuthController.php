<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //call the showRegister function to display the register blade file
    public function showRegister() {

        return view ('register');
    }
    
    public function register(Request $request) {
        //requirements to validate the creadentials for registration
        $credentials = $request->validate([
            'name'=>'required|unique:users,name',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6|confirmed',
        ]);

        //create a table and insert data into it
        $user = User::create ([
            'name' => $credentials['name'],
            'email'=>$credentials['email'],
            'password'=>Hash::make($credentials['password']),
            'role'=>'user', // default role
        ]);

        auth()->login($user);

        return redirect()->route('home')->with('success', 'Account has been created'); }

    // show login 
    public function showLogin() {
        return view('login');
    }

    //Handle login/checking if user exists or not
    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            //redirect based on role
            if (Auth::user()->role ==='admin') {
                return redirect()->route('dashboard');
            } else {
                return redirect()->intended('/home');
            }
        }

        return back()->withErrors([ 
            'email' => 'Invalid credentials',
        ]);
    }
    
    //Handle Logout
    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }
    
    //show home
    public function showHome() {
        return view('home');
    }
}


