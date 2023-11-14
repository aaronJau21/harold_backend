<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('drivers')->insert([
            'f_name' => 'Pedro',
            'l_name' => 'Jauregui',
            'phone' => '12345678789',
            'email' => 'pedro@gmail.com',
            'password' => bcrypt('123456789'),
            'role_id' => 3,
            'sucursal_id' => 1,
            'busine_id' => 1
        ]);
    }
}
