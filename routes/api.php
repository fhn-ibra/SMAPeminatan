<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//Ini buat Ngambil seluruh data pendaftar, itu gw tadi tambahin middleware sanctum buat coba coba. Nanti hapus aja
Route::get('/pendaftar', [ApiController::class, 'pendaftar'])->middleware('auth:sanctum');

//Ini buat ngambil data seluruh kelas
Route::get('/kelas', [ApiController::class, 'kelas']);

//Ini buat ngambil data Siswa sesuai Kelasnya contoh : /data/111
Route::get('/data/{id}', [ApiController::class, 'dataKelas']);

//ini sih sebenernya delete data dari table Jurusan
Route::get('/delete/{id}', [ApiController::class, 'delete']);

//Ini buat nambahin data dari table Jurusan
Route::post('/insert', [ApiController::class, 'insert']);