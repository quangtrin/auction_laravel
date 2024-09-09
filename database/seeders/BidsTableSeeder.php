<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 0; $i < 10; $i++) {
            DB::table('bids')->insert([
                'auction_id' => rand(1, 10), // Assuming you have 10 auctions seeded
                'user_id' => rand(1, 10),    // Assuming you have 10 users seeded
                'bid_amount' => rand(100, 1000), // Random bid amount between 100 and 1000
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
