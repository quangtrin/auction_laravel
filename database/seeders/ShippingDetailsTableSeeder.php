<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $shippingDetails = [
            [
                'winner_id' => 1,
                'shipping_address' => '123 Main St, Springfield, IL, 62701, USA',
                'tracking_number' => 'TRACK123456',
                'status' => 'processing',
            ],
            [
                'winner_id' => 2,
                'shipping_address' => '456 Elm St, Shelbyville, IL, 62565, USA',
                'tracking_number' => 'TRACK789012',
                'status' => 'shipped',
            ],
            [
                'winner_id' => 3,
                'shipping_address' => '789 Oak St, Capital City, IL, 62704, USA',
                'tracking_number' => 'TRACK345678',
                'status' => 'delivered',
            ],
            // Add more shipping details as needed
        ];

        foreach ($shippingDetails as $detail) {
            DB::table('shipping_details')->insert(array_merge($detail, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
