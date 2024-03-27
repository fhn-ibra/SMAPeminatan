<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('admin.login');
    }
    
    public function login(Request $request){
        dd($request->all());
    }

    public function user(){
        return view('user.login');
    }

    public function logout(){
        if(Auth::user()->level == 'Admin'){
            Auth::logout();
            return redirect()->route('admin');
        } else {
            Auth::logout();
            return redirect()->route('login');
        }
    }
}
