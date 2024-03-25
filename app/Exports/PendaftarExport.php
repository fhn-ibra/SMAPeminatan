<?php

namespace App\Exports;

use App\Models\Siswa;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PendaftarExport implements FromView
{

    public function view(): View
    {
        return view('export.pendaftar', [
            'data' => Siswa::all()
        ]);
    }

}
