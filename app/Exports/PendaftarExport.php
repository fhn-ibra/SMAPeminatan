<?php

namespace App\Exports;

use App\Models\Siswa;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class PendaftarExport implements FromView, ShouldAutoSize
{

    public function view(): View
    {
        return view('export.pendaftar', [
            'data' => Siswa::all()
        ]);
    }

}
