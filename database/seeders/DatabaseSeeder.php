<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
<<<<<<< HEAD
        $this->call(RuangSeeder::class);
        $this->call(MahasiswaSeeder::class);
        $this->call(AdminSeeder::class);
=======
        $this->call(MahasiswaSeeder::class);
>>>>>>> 8616a0082ddbafbdcf980a5885fa34ad4acae981
    }
}