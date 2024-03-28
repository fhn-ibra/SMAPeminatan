<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class user
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!Auth::check()){
            return redirect('login');
        };

        $email = explode('@', Auth::user()->email)[1];
        if (in_array($email, ['smkprestasiprima.sch.id', 'smk.prestasiprima.sch.id','smaprestasiprima.sch.id', 'sma.prestasiprima.sch.id', 'prestasiprima.sch.id'])) {
            return $next($request);
        } else {
            Auth::logout();
            return redirect()->route('login')->with(['email' => true]);

        }

    }
}
