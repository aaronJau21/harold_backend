<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('busines')->insert([
            'name' => 'Duki',
            'phone' => '987654321',
            'email' => 'duki@gmail.com',
            'address' => 'melgarejo',
            'comission' => 0.00,
            'status' => 1,
            'free_delivery' => 0,
            'delivery' => 1,
            'take_away' => 0,
            'sucursal_id' => 1,
            'active' => 1,
            'model_id' => 1
        ]);
    }
}
