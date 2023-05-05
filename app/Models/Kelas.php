<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    //fillable
    protected $fillable = [
        'id',
        'nama_kelas',
        'tersedia'
    ];

    //relasi
    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'id_kelas', 'id');
    }
}
