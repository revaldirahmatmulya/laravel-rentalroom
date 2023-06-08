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
            'nim' => '2031130021',
            'nama' => 'Saphira Indah Pramesti',
            'kelas' => '1-A',
            'jurusan' => 'Teknik Telekomunikasi',
            'meminjam' => 0
        ]);
    }
}