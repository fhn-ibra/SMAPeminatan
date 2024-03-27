<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

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

Route::group(['middleware' => ['guest']], function(){
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/proses', [LoginController::class, 'login'])->name('proses');
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/UserLog', function(){
    return view('user.dashboard.index', ['title' => 'User']);
});
Route::get('/form', function(){
    return view('user.index');
});
Route::get('/Jurusan1', function(){
    return view('user.ipa');
});
Route::get('/Jurusan2', function(){
    return view('user.ips');
});
Route::get('/tes', function(){
    return view('tes');
});


Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard',[AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/pendaftar', [AdminController::class, 'pendaftar'])->name('pendaftar');
    Route::delete('/pendaftar/delete', [AdminController::class, 'pendaftarDelete'])->name('pendaftar.delete');
    Route::get('/pendaftar/export', [AdminController::class, 'pendaftarExport']);
    
    Route::get('/ipa', [KelasController::class, 'ipa'])->name('ipa');
    Route::get('/ipa/{id}', [KelasController::class, 'ipaDetail'])->name('ipa.detail');
    Route::delete('/ipa/delete/{id}', [KelasController::class, 'ipaDelete'])->name('ipa.delete');
    
    Route::get('/kelas/export/{id}', [KelasController::class, 'Export']);
    
    Route::get('/ips', [KelasController::class, 'ips'])->name('ips');
    Route::get('/ips/{id}', [KelasController::class, 'ipsDetail'])->name('ips.detail');
    Route::delete('/ips/delete/{id}', [KelasController::class, 'ipsDelete'])->name('ips.delete');
});




Route::get('auth/google', [GoogleController::class, 'redirectGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);