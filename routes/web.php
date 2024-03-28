<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GoogleController;

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

    Route::get('/login', function(){
        return redirect('/');
    });
});

Route::group(['middleware' => ['auth']], function(){
  //------------------Universal Route------------------
  Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
  //------------------End Universal Route------------------
});


Route::group(['middleware' => ['user']], function(){
    //------------------User Route------------------
    Route::get('/form', [UserController::class, 'form'])->name('form');
    
    Route::get('/user', [UserController::class, 'user'])->name('user');
    
    Route::get('/form/ipa', [UserController::class, 'ipa'])->name('form.ipa');
    Route::get('/form/ipa/register/{id}', [UserController::class, 'pilihanIpa'])->name('pilihan.ipa');
    
    Route::get('/form/ips', [UserController::class, 'ips'])->name('form.ips');
    Route::get('/form/ips/register/{id}', [UserController::class, 'pilihanIps'])->name('pilihan.ips');
    
    Route::get('/form/ipa/register', [UserController::class, 'registerIpa'])->name('register.ipa');
    Route::get('/form/ips/register', [UserController::class, 'registerIps'])->name('register.ips');

    Route::post('/next', [UserController::class, 'next'])->name('next');
    
    Route::get('/ipa/submit', [UserController::class, 'submitIpa'])->name('submit.ipa');
    Route::get('/ips/submit', [UserController::class, 'submitIps'])->name('submit.ips');
    
    Route::post('/submit', [UserController::class, 'submit'])->name('submit');
    
    Route::get('/user/kelas', [UserController::class, 'kelas'])->name('kelas');
    Route::get('/user/kelas/{id}', [UserController::class, 'detailKelas']);
    //------------------End User Route------------------
    
  
});

Route::group(['middleware' => ['level']], function(){
    //------------------Admin & Guru Route------------------
    Route::get('/dashboard',[AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/pendaftar', [AdminController::class, 'pendaftar'])->name('pendaftar');
    Route::delete('/pendaftar/delete', [AdminController::class, 'pendaftarDelete'])->name('pendaftar.delete');
    Route::get('/pendaftar/export', [AdminController::class, 'pendaftarExport']);
    
    Route::get('/ipa', [KelasController::class, 'ipa'])->name('ipa');
    Route::get('/ipa/{id}', [KelasController::class, 'ipaDetail'])->name('ipa.detail');
    Route::post('/ipa/edit/{id}', [KelasController::class, 'ipaEdit']);
    Route::delete('/ipa/delete/{id}', [KelasController::class, 'ipaDelete'])->name('ipa.delete');
    
    Route::get('/kelas/export/{id}', [KelasController::class, 'Export']);
    
    Route::get('/ips', [KelasController::class, 'ips'])->name('ips');
    Route::get('/ips/{id}', [KelasController::class, 'ipsDetail'])->name('ips.detail');
    Route::delete('/ips/delete/{id}', [KelasController::class, 'ipsDelete'])->name('ips.delete');
    //------------------End Admin & Guru Route------------------
});    

//------------------Google Route------------------
Route::get('auth/google', [GoogleController::class, 'redirectGoogle'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
//------------------End Google Route------------------