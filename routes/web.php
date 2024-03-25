<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/UserLog', function(){
    return view('user.dashboard.index');
});
Route::get('/pilihan', function(){
    return view('user.index');
});
Route::get('/Jurusan1', function(){
    return view('user.ipa');
});
Route::get('/Jurusan2', function(){
    return view('user.ips');
});
Route::get('/', function () {
    return view('user.login');
});

Route::get('/login', function () {
    return view('admin.login');
});


Route::get('/dashboard',[AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/pendaftar', [AdminController::class, 'pendaftar'])->name('pendaftar');

Route::get('/ipa', [KelasController::class, 'ipa'])->name('ipa');
Route::get('/ipa/1', function () {
    return view('admin.IPA.detail');
});

Route::get('/ips', [KelasController::class, 'ips'])->name('ips');
Route::get('/ips/1', function () {
    return view('admin.IPS.detail');
});


Route::get('auth/google', [GoogleController::class, 'redirectGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);