<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Siswa;
use App\Exports\DetailExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

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
            'paket' => Paket::where('id', $id)->value('nama_paket'),
            'id' => $id
        ];

        return view('admin.IPA.detail', $data);
    }

    public function ipsDetail($id){
        $data = [
            'data' => Siswa::where('paket_id', $id)->get(),
            'title' => Paket::where('id', $id)->value('nama_kelas'),
            'paket' => Paket::where('id', $id)->value('nama_paket'),
            'id' => $id
        ];

        return view('admin.IPS.detail', $data);
    }

    public function Export($id){
        $kelas = Paket::where('id', $id)->value('nama_kelas');
        $export = new DetailExport($id);
        return Excel::download($export , $kelas . '.xlsx');
    }

    public function ipaDelete($id, Request $request){
        $siswa = Siswa::where('id', $request->id);
        $siswa->delete();

        return redirect('/ipa/' . $id)->with(['modal' => true, 'message' => 'Data Berhasil di Hapus']);
    }

    public function ipsDelete($id, Request $request){
        $siswa = Siswa::where('id', $request->id);
        $siswa->delete();

        return redirect('/ips/' . $id)->with(['modal' => true, 'message' => 'Data Berhasil di Hapus']);
    }
}
