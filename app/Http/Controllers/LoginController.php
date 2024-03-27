<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return redirect()->route('login')->with(['error' => true]);
        
    }

    public function user(){
        return view('user.login');
    }

    public function logout(){
            Auth::logout();
            return redirect()->route('login');
    }
}
