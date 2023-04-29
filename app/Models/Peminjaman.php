<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    //fillable
    protected $fillable = [
        'id',
        'id_mahasiswa',
        'id_kelas',
        'waktu_pinjam',
        'waktu_kembali',
        'status'
    ];
}
