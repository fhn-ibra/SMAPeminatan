<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function ipa(){
        return view('admin.IPA.index',[
            'title' => 'Kelas IPA',
            'data' => Paket::where('jurusan_id', 100)->get()
        ]);
    }

    public function ips(){
        return view('admin.IPS.index', [
            'title' => 'Kelas IPS',
            'data' => Paket::where('jurusan_id', 200)->get()
        ]);
    }
}
