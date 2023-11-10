<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sucursals')->insert([
            'name' => 'Santa Ana',
            'status' => 1,
            'store_wise_topic' => 'zone_1_store',
            'customer_wise_topic' => 'zone_1_customer',
            'delivery_wise_topic' => 'zone_1_delivery_man',
            'cash_on_delivery' => 1,
            'digital_payment' => 1,
            'increased_delivery_free' => 0.00,
            'increased_delivery_free_status' => 0,
            'offline_payment' => 0
        ]);

        DB::table('sucursals')->insert([
            'name' => 'San Salvador y Santa Tecla',
            'status' => 1,
            'store_wise_topic' => 'zone_2_store',
            'customer_wise_topic' => 'zone_2_customer',
            'delivery_wise_topic' => 'zone_2_delivery_man',
            'cash_on_delivery' => 1,
            'digital_payment' => 0,
            'increased_delivery_free' => 0.00,
            'increased_delivery_free_status' => 0,
            'offline_payment' => 0
        ]);
    }
}
