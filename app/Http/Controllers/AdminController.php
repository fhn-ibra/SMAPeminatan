<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $data = [
            'title' => 'Dashboard',
            'footer' => true
        ];
        return view('admin.dashboard', $data);
    }

    public function pendaftar(){
        $data = [
            'title' => 'Pendaftar',
            'data' => Siswa::all()
        ];
        return view('admin.pendaftar', $data);
    }
}
