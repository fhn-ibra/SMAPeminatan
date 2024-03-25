<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Siswa;
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

    public function ipaDetail($id){
        $data = [
            'data' => Siswa::where('paket_id', $id)->get(),
            'title' => Paket::where('id', $id)->value('nama_kelas'),
            'paket' => Paket::where('id', $id)->value('nama_paket')
        ];

        return view('admin.IPA.detail', $data);
    }

    public function ipsDetail($id){
        $data = [
            'data' => Siswa::where('paket_id', $id)->get(),
            'title' => Paket::where('id', $id)->value('nama_kelas'),
            'paket' => Paket::where('id', $id)->value('nama_paket')
        ];

        return view('admin.IPS.detail', $data);
    }
}
