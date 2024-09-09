<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class AuctionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 0; $i < 10; $i++) {
            DB::table('auctions')->insert([
                'product_id' => rand(1, 10), // Assuming you have product IDs between 1 and 100
                'starting_price' => rand(100, 1000), // Random price between 100 and 1000
                'start_time' => Carbon::now(),
                'end_time' => Carbon::now()->addDays(rand(1, 10)), // Auction ends randomly between 1 to 10 days
                'status' => 'ongoing',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
