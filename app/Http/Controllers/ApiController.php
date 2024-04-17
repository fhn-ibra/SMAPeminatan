<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Siswa;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class ApiController extends Controller
{
   public function pendaftar(){
    $data = [
        'status' => 200,
        'data' => Siswa::all()
    ];
    return response()->json($data);
   }

   public function kelas(){
    $data = [
        'status' => 'Success',
        'data' => Paket::all()->select('id', 'nama_paket', 'nama_kelas')
    ];
    return response()->json($data);
   }

   public function dataKelas($id){
    $siswa = Siswa::where('paket_id', $id)->get();

    if($siswa->isEmpty()){  
        return response()->json([
            'error' => 'Kelas Not Found'
        ], 404);
    } else {
        $data = [
            'status' => true,
            'data' => $siswa
        ];
        return response()->json($data);
    }
   }

   public function insert(Request $request){
    $a = new Jurusan();
    $a->id = $request->id;
    $a->nama_jurusan = $request->nama;
    $a->save();
    return response()->json(['status' => 'Insert Success', 'data' => $request->all()]);
   }

   public function delete($id){
    $jurusan = Jurusan::where('id', $id);
    $jurusan->delete();
    return response()->json(['status' => 'Success']);
   }
}
