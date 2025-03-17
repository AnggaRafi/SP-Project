<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function Login(Request $request){

        $validated = $request->validate([
            'email' => 'required|email',
            'password'=> 'required|string',
        ]);

        if(Auth::guard('web')->attempt($validated)){
            $request->session()->regenerate();

            return redirect()->route('show.siswa');
        }

        throw ValidationException::withMessages([
            'credentials' => 'Sorry, wrong credentials'
        ]);
       
    }

    public function showLogin(){
        return view('pages.login');
    }

    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
