<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

=======
>>>>>>> 8616a0082ddbafbdcf980a5885fa34ad4acae981

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        DB::table('admins')->delete();
        DB::table('admins')->insert([
            'username' => "admin",
            'password' => Hash::make('admin'),
        ]);
    }
}
=======
        //
    }
}
>>>>>>> 8616a0082ddbafbdcf980a5885fa34ad4acae981
