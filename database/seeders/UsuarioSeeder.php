<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            'f_name' => 'Aaron',
            'I_name' => 'Jauregui',
            'phone' => '+51 959467609',
            'email' => 'aaronjau21@gmail.com',
            'password' => bcrypt('123456789'),
            'role_id' => 1,
            'sucursal_id' => 1
        ]);
    }
}
