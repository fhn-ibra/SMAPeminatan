<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jurusan;
use App\Models\Paket;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jurusan = [
            [
                'id' => 100,
                'nama_jurusan' => 'IPA'
            ],
            [
                'id' => 200,
                'nama_jurusan' => 'IPS'
            ]
        ];

        $paket = [
            [
                'id' => 111,
                'nama_paket' => 'SAINTEK A',
                'nama_kelas' => 'XI IPA 1',
                'stok' => 40,
                'jurusan_id' => '100'
            ], [
                'id' => 112,
                'nama_paket' => 'SAINTEK A',
                'nama_kelas' => 'XI IPA 2',
                'stok' => 40,
                'jurusan_id' => '100'
            ], [
                'id' => 113,
                'nama_paket' => 'SAINTEK A',
                'nama_kelas' => 'XI IPA 3',
                'stok' => 40,
                'jurusan_id' => '100'
            ], [
                'id' => 114,
                'nama_paket' => 'SAINTEK A',
                'nama_kelas' => 'XI IPA 4',
                'stok' => 40,
                'jurusan_id' => '100'
            ], [
                'id' => 121,
                'nama_paket' => 'SAINTEK B',
                'nama_kelas' => 'XI IPA 5',
                'stok' => 40,
                'jurusan_id' => '100'
            ], [
                'id' => 122,
                'nama_paket' => 'SAINTEK B',
                'nama_kelas' => 'XI IPA 6',
                'stok' => 40,
                'jurusan_id' => '100'
            ], [
                'id' => 131,
                'nama_paket' => 'SAINTEK C',
                'nama_kelas' => 'XI IPA 7',
                'stok' => 40,
                'jurusan_id' => '100'
            ], [
                'id' => 141,
                'nama_paket' => 'SAINTEK D',
                'nama_kelas' => 'XI IPA 8',
                'stok' => 40,
                'jurusan_id' => '100'
            ], [
                'id' => 211,
                'nama_paket' => 'SOSHUM E',
                'nama_kelas' => 'XI IPS 1',
                'stok' => 40,
                'jurusan_id' => '200'
            ], [
                'id' => 212,
                'nama_paket' => 'SOSHUM E',
                'nama_kelas' => 'XI IPS 2',
                'stok' => 40,
                'jurusan_id' => '200'
            ], [
                'id' => 213,
                'nama_paket' => 'SOSHUM E',
                'nama_kelas' => 'XI IPS 3',
                'stok' => 40,
                'jurusan_id' => '200'
            ], [
                'id' => 214,
                'nama_paket' => 'SOSHUM E',
                'nama_kelas' => 'XI IPS 4',
                'stok' => 40,
                'jurusan_id' => '200'
            ], [
                'id' => 221,
                'nama_paket' => 'SOSHUM F',
                'nama_kelas' => 'XI IPS 5',
                'stok' => 40,
                'jurusan_id' => '200'
            ], [
                'id' => 222,
                'nama_paket' => 'SOSHUM F',
                'nama_kelas' => 'XI IPS 6',
                'stok' => 40,
                'jurusan_id' => '200'
            ], [
                'id' => 231,
                'nama_paket' => 'SOSHUM G',
                'nama_kelas' => 'XI IPS 7',
                'stok' => 40,
                'jurusan_id' => '200'
            ]];

            foreach($jurusan as $data){
                Jurusan::create($data);
            }

            foreach($paket as $data){
                Paket::create($data);
            }
    }
}
