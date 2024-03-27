<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(){
        try{
            $user = Socialite::driver('google')->user();

            $finduser = User::where('email', $user->email)->first();

            if($finduser){
                Auth::login($finduser);
                return redirect('/form');
            } else {
                dd($user->user->hd);
                $newuser = User::updateOrCreate([
                    'email' => $user->email,
                    'name' => $user->name,
                    'google_id' => $user->id,
                    'password' => rand(10000, 100000000)
                ]);
                Auth::login($newuser);
                return redirect('/pilihan');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
