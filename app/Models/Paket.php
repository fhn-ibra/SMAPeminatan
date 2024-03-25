<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;

    protected $table = 'paket';
    public $timestamps = false;

    protected $fillable = [
        'nama_paket',
        'nama_kelas',
        'stok',
        'jurusan_id',
    ];

    public function siswa(){
        return $this->hasMany(Siswa::class, 'id', 'paket_id');
    }

    public function jurusan(){
        return $this->belongsTo(Jurusan::class, 'jurusan_id', 'id');
    }
}
