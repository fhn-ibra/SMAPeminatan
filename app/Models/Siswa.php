<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';

    protected $fillable = [
        'user_id',
        'nama',
        'asal_kelas',
        'kampus_tujuan',
        'fakultas_tujuan',
        'alasan',
        'paket_id',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function paket(){
        return $this->belongsTo(Paket::class, 'paket_id', 'id');
    }
}
