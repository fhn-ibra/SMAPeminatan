<?php

namespace App\Exports;

use App\Models\Siswa;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class DetailExport implements FromView, ShouldAutoSize
{
    public $id;

    public function __construct($id){
        $this->id = $id;
    }

    public function view(): View
    {
        return view('export.ipa', [
            'data' => Siswa::where('paket_id', $this->id)->orderBy('nama', 'desc')->get()
        ]);
    }

}
