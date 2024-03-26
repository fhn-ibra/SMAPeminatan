<?php

namespace App\Http\Controllers;

use App\Exports\PendaftarExport;
use App\Models\Siswa;
use App\Models\Paket;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AdminController extends Controller
{
    public function dashboard(){

        $array = [];
        $kelas = Paket::all();
        
        foreach($kelas as $d){
            $siswa = Siswa::where('paket_id', $d->id)->count();

            $array[] = $siswa;
        }


        $data = [
            'pendaftar' => Siswa::count(),
            'ipa' => Siswa::where('paket_id', '<=', '200')->count(),
            'ips' => Siswa::where('paket_id', '>=', 200)->count(),
            'kelas' => json_encode(Paket::pluck('nama_kelas')),
            'data' => json_encode($array),
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

    public function pendaftarDelete(Request $request){
        $siswa = Siswa::where('id', $request->id);
        $siswa->delete();

        return redirect()->route('pendaftar')->with(['modal' => true, 'message' => 'Data Berhasil di Hapus']);
    }

    public function pendaftarExport(){
        return Excel::download(new PendaftarExport, 'pendaftar.xlsx');
    }
}
