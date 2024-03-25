<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $table = 'jurusan';
    public $timestamps = false;

    protected $fillable = [
        'nama_jurusan'
    ];

    public function paket(){
        return $this->hasMany(Paket::class, 'id', 'jurusan_id');
    }
}
