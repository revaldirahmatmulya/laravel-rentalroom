<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswa = [

            'nim' => '2031130021',
            'nama' => 'Saphira Indah Pramesti',
            'jurusan' => 'Teknik Electr',
            'meminjam' => 0

        ];

        foreach ($mahasiswa as $item) {
            Mahasiswa::create($mahasiswa);
        }
    }
}
