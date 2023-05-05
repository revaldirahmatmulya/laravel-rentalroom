<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    //fillable
    protected $fillable = [
        'id',
        'nim',
        'nama',
        'jurusan',
        'meminjam'
    ];

    //relasi
    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'id_mahasiswa', 'id');
    }
}
