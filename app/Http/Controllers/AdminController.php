<?php

namespace App\Http\Controllers;

use App\Exports\PendaftarExport;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

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

    public function pendaftarExport(){
        return Excel::download(new PendaftarExport, 'pendaftar.xlsx');
    }
}