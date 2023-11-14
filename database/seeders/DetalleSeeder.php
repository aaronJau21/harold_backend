<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detalles')->insert([
            'name' => 'Caja'
        ]);

        DB::table('detalles')->insert([
            'name' => 'Caja Extra'
        ]);

        DB::table('detalles')->insert([
            'name' => 'Adelanto'
        ]);

        DB::table('detalles')->insert([
            'name' => 'Pago Wompi'
        ]);

        DB::table('detalles')->insert([
            'name' => 'Pago de Mandaditos'
        ]);

        DB::table('detalles')->insert([
            'name' => 'Pago de Puntos'
        ]);

        DB::table('detalles')->insert([
            'name' => 'Pago de Billetera'
        ]);

        DB::table('detalles')->insert([
            'name' => 'Pago de Transferencia'
        ]);

        DB::table('detalles')->insert([
            'name' => 'Pago de Bitcoin'
        ]);

        DB::table('detalles')->insert([
            'name' => 'Pago de Otros'
        ]);
    }
}
