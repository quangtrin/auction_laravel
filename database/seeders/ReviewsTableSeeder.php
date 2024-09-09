<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 0; $i < 10; $i++) {
            DB::table('reviews')->insert([
                'user_id' => rand(1, 10), // Assuming you have 10 users
                'auction_id' => rand(1, 10), // Assuming you have 10 auctions
                'rating' => rand(1, 5), // Random rating between 1 and 5
                'comment' => 'This is a comment for review ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
