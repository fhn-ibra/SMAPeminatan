<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function form(){
        return view('user.pilihan');
    }

    public function user(){
        return view('user.dashboard');
    }

    public function ipa(){
        return view('user.ipa');
    }

    public function ips(){
        return view('user.ips');
    }
}
