<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function form()
    {
        return view('user.pilihan', ['title' => 'Pilihan']);
    }

    public function user()
    {
        $kelas = Siswa::where('user_id', Auth::user()->id)->value('paket_id');
        $data = [
            'data' => Siswa::where('user_id', Auth::user()->id)->first(),
            'title' => 'Data Siswa',
            'kelas' => Siswa::where('paket_id', $kelas)->get()

        ];

        return view('user.dashboard', $data);
    }

    public function ipa()
    {
        $data = [
            'title' => 'IPA',
            'A' => Paket::where('nama_paket', 'SAINTEK A')->sum('stok'),
            'B' => Paket::where('nama_paket', 'SAINTEK B')->sum('stok'),
            'C' => Paket::where('nama_paket', 'SAINTEK C')->sum('stok'),
            'D' => Paket::where('nama_paket', 'SAINTEK D')->sum('stok'),
        ];
        return view('user.IPA.index', $data);
    }
    
    public function ips()
    {
        $data = [
            'title' => 'IPS',
            'E' => Paket::where('nama_paket', 'SOSHUM E')->sum('stok'),
            'F' => Paket::where('nama_paket', 'SOSHUM F')->sum('stok'),
            'G' => Paket::where('nama_paket', 'SOSHUM G')->sum('stok'),
        ];
        return view('user.IPS.index', $data);
    }

    public function pilihanIpa($id)
    {
        return redirect()->route('register.ipa')->with(['data' => $id]);
    }

    public function pilihanIps($id)
    {
        return redirect()->route('register.ips')->with(['data' => $id]);
    }

    public function registerIpa()
    {
        if (empty(session('data'))) {
            return redirect('/form/ipa');
        } else {
            $data = [
                'title' => 'Form IPA',
                'id' => session('data'),
                'paket' => Paket::where('id', session('data') + 1)->value('nama_paket')
            ];

            return view('user.IPA.register', $data);
        }
    }

    public function registerIps()
    {
        if (empty(session('data'))) {
            return redirect('/form/ips');
        } else {
            $data = [
                'title' => 'Form IPS',
                'id' => session('data'),
                'paket' => Paket::where('id', session('data') + 1)->value('nama_paket')
            ];

            return view('user.IPS.register', $data);
        }
    }

    public function next(Request $request)
    {

        $paket = Paket::where('id', $request->id + 1)->value('nama_paket');

        $data = [
            'title' => 'Review',
            'nama' => strtoupper($request->nama),
            'id' => $request->id,
            'asal' => $request->Asal_kelas,
            'paket' => $paket,
            'kampus' => $request->kampus_tujuan,
            'fakultas' => $request->fakultas_tujuan,
            'alasan' => $request->Alasan
        ];

        if ($request->id >= 200) {
            return redirect()->route('submit.ips')->with(['data' => $data]);
        } else {
            return redirect()->route('submit.ipa')->with(['data' => $data]);
        }
    }

    public function submitIpa()
    {
        if (!session('data')) {
            return redirect('/form/ipa');
        } else {
            $data = (session('data'));
            return view('user.IPA.hasil', $data);
        }
    }

    public function submitIps()
    {
        if (!session('data')) {
            return redirect('/form/ips');
        } else {
            $data = (session('data'));
            return view('user.IPS.hasil', $data);
        }
    }

    public function submit(Request $request)
    {

        $kondisi = true;

        //------------------IF Else IPA------------------
        if ($request->kelas == 'SAINTEK A') {

            if ((Paket::where('id', 111)->value('stok') <= 0) && (Paket::where('id', 112)->value('stok') <= 0) && (Paket::where('id', 113)->value('stok') <= 0) && (Paket::where('id', 114)->value('stok') <= 0)) {
                return redirect('/form/ipa')->with(['error' => true]);
            }

            while ($kondisi) {
                $rand = rand('111', '114');
                $stok = Paket::where('id', $rand)->value('stok');

                if ($stok > 0) {
                    $siswa = Siswa::create([
                        'nama' => $request->nama,
                        'paket_id' => $rand,
                        'user_id' => Auth::user()->id,
                        'asal_kelas' => $request->asal,
                        'kampus_tujuan' => $request->kampus,
                        'fakultas_tujuan' => $request->fakultas,
                        'alasan' => $request->alasan
                    ]);

                    $kelas = Paket::find($rand);
                    $kelas->stok -= 1;
                    $kelas->save();

                    $kondisi = false;
                    return redirect('/user');
                }
            }
        } elseif ($request->kelas == 'SAINTEK B') {

            if ((Paket::where('id', 121)->value('stok') <= 0) && (Paket::where('id', 122)->value('stok') <= 0)) {
                return redirect('/form/ipa')->with(['error' => true]);
            }

            while ($kondisi) {
                $rand = rand('121', '122');
                $stok = Paket::where('id', $rand)->value('stok');

                if ($stok > 0) {
                    $siswa = Siswa::create([
                        'nama' => $request->nama,
                        'paket_id' => $rand,
                        'user_id' => Auth::user()->id,
                        'asal_kelas' => $request->asal,
                        'kampus_tujuan' => $request->kampus,
                        'fakultas_tujuan' => $request->fakultas,
                        'alasan' => $request->alasan
                    ]);

                    $kelas = Paket::find($rand);
                    $kelas->stok -= 1;
                    $kelas->save();

                    $kondisi = false;
                    return redirect('/user');
                }
            }
        } elseif ($request->kelas == 'SAINTEK C') {
            $stok = Paket::where('id', $request->id + 1)->value('stok');

            if ($stok > 0) {
                $siswa = Siswa::create([
                    'nama' => $request->nama,
                    'paket_id' => $request->id + 1,
                    'user_id' => Auth::user()->id,
                    'asal_kelas' => $request->asal,
                    'kampus_tujuan' => $request->kampus,
                    'fakultas_tujuan' => $request->fakultas,
                    'alasan' => $request->alasan
                ]);

                $kelas = Paket::find($request->id + 1);
                $kelas->stok -= 1;
                $kelas->save();

                return redirect('/user');
            } else {
                return redirect('/form/ipa')->with(['error' => true]);
            }
        } elseif ($request->kelas == 'SAINTEK D') {
            $stok = Paket::where('id', $request->id + 1)->value('stok');

            if ($stok > 0) {
                $siswa = Siswa::create([
                    'nama' => $request->nama,
                    'paket_id' => $request->id + 1,
                    'user_id' => Auth::user()->id,
                    'asal_kelas' => $request->asal,
                    'kampus_tujuan' => $request->kampus,
                    'fakultas_tujuan' => $request->fakultas,
                    'alasan' => $request->alasan
                ]);

                $kelas = Paket::find($request->id + 1);
                $kelas->stok -= 1;
                $kelas->save();

                return redirect('/user');
            } else {
                return redirect('/form/ipa')->with(['error' => true]);
            }
        }
        //------------------End If Else IPA------------------

        //------------------If Else IPS------------------
        if ($request->kelas == 'SOSHUM E') {
            if ((Paket::where('id', 211)->value('stok') <= 0) && (Paket::where('id', 212)->value('stok') <= 0) && (Paket::where('id', 213)->value('stok') <= 0) && (Paket::where('id', 214)->value('stok') <= 0)) {
                return redirect('/form/ips')->with(['error' => true]);
            }

            while ($kondisi) {
                $rand = rand('211', '214');
                $stok = Paket::where('id', $rand)->value('stok');

                if ($stok > 0) {
                    $siswa = Siswa::create([
                        'nama' => $request->nama,
                        'paket_id' => $rand,
                        'user_id' => Auth::user()->id,
                        'asal_kelas' => $request->asal,
                        'kampus_tujuan' => $request->kampus,
                        'fakultas_tujuan' => $request->fakultas,
                        'alasan' => $request->alasan
                    ]);

                    $kelas = Paket::find($rand);
                    $kelas->stok -= 1;
                    $kelas->save();

                    $kondisi = false;
                    return redirect('/user');
                }
            }
        } elseif ($request->kelas == 'SOSHUM F') {
            if ((Paket::where('id', 221)->value('stok') <= 0) && (Paket::where('id', 222)->value('stok') <= 0)) {
                return redirect('/form/ips')->with(['error' => true]);
            }

            while ($kondisi) {
                $rand = rand('221', '222');
                $stok = Paket::where('id', $rand)->value('stok');

                if ($stok > 0) {
                    $siswa = Siswa::create([
                        'nama' => $request->nama,
                        'paket_id' => $rand,
                        'user_id' => Auth::user()->id,
                        'asal_kelas' => $request->asal,
                        'kampus_tujuan' => $request->kampus,
                        'fakultas_tujuan' => $request->fakultas,
                        'alasan' => $request->alasan
                    ]);

                    $kelas = Paket::find($rand);
                    $kelas->stok -= 1;
                    $kelas->save();

                    $kondisi = false;
                    return redirect('/user');
                }
            }
        } elseif ($request->kelas == 'SOSHUM G') {
            $stok = Paket::where('id', $request->id + 1)->value('stok');

            if ($stok > 0) {
                $siswa = Siswa::create([
                    'nama' => $request->nama,
                    'paket_id' => $request->id + 1,
                    'user_id' => Auth::user()->id,
                    'asal_kelas' => $request->asal,
                    'kampus_tujuan' => $request->kampus,
                    'fakultas_tujuan' => $request->fakultas,
                    'alasan' => $request->alasan
                ]);

                $kelas = Paket::find($request->id + 1);
                $kelas->stok -= 1;
                $kelas->save();

                return redirect('/user');
            } else {
                return redirect('/form/ips')->with(['error' => true]);
            }
        }
         //------------------End If Else IPS------------------
    }

    public function kelas(){
        $data = [
            'title' => 'Kelas',
            'ipa' => Paket::where('jurusan_id', 100)->get(),
            'ips' => Paket::where('jurusan_id', 200)->get(),
        ];
        return view('user.kelas.index', $data);
    }

    public function detailKelas($id){
        $data = [
            'data' => Siswa::where('paket_id', $id)->get(),
            'title' => Paket::where('id', $id)->value('nama_kelas'),
            'paket' => Paket::where('id', $id)->value('nama_paket'),
        ];

        return view('user.kelas.detail', $data);
    }
}
