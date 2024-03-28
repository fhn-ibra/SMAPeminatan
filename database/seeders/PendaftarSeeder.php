<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PendaftarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pendaftar = [[
            'user_id' => 1,
            'nama' => 'Farhan Ibra Andhika',
            'asal_kelas' => 'X-1',
            'kampus_tujuan' => 'Universitas Indonesia',
            'fakultas_tujuan' => 'Ilmu Komputer',
            'alasan' => 'Kampus yang dekat dari Rumah',
            'paket_id' => 111,
        ],[
            'user_id' => 2,
            'nama' => 'Muhammad Erlangga Putra Witanto',
            'asal_kelas' => 'X-2',
            'kampus_tujuan' => 'Universitas Gajah Mada',
            'fakultas_tujuan' => 'Ilmu Komputer',
            'alasan' => 'Suka yang ada Gajahnya',
            'paket_id' => 221,
        ]];

        foreach($pendaftar as $data){
            Siswa::create($data);
        }
    }
}
