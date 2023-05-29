<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->delete();
        DB::table('kelas')->insert([
            [
                'nama_kelas' => "Kelas A",
                'kode_kunci' => "PA9",
                'tersedia' => 1,
            ],
            [
                'nama_kelas' => "Kelas B",
                'kode_kunci' => "PA9",
                'tersedia' => 1,
            ],
            [
                'nama_kelas' => "Kelas C",
                'kode_kunci' => "PA9",
                'tersedia' => 1,
            ],
            [
                'nama_kelas' => "Lab A",
                'kode_kinci' => "PA6",
                'tersedia' => 1,
            ],
            [
                'nama_kelas' => "Lab B",
                'kode_kunci' => "PA7",
                'tersedia' => 1,
            ],
            [
                'nama_kelas' => "Lab C",
                'kode_kunci' => "PA8",
                'tersedia' => 1,
            ]
        ]);
    }
}