<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */






    public function run()
    {
        DB::table('mahasiswas')->delete();
        Mahasiswa::create([
            'nim' => '200',
            'nama' => 'Saphira',
            'jurusan' => 'Teknik Telekomunikasi',
            'meminjam' => 0
        ]);
    }
}