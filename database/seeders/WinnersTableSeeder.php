<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WinnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 0; $i < 10; $i++) {
            DB::table('winners')->insert([
                'auction_id' => rand(1, 10), // Assuming there are 10 auctions
                'user_id' => rand(1, 10),    // Assuming there are 10 users
                'winning_bid' => rand(500, 1000), // Random winning bid between 500 and 1000
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
