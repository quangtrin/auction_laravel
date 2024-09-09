<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 0; $i < 10; $i++) {
            DB::table('payments')->insert([
                'user_id' => rand(1, 10), // Assuming you have 10 users
                'auction_id' => rand(1, 10), // Assuming you have 10 auctions
                'amount' => rand(100, 1000), // Random amount between 100 and 1000
                'status' => 'completed', // Setting all payments as completed, you can randomize this if needed
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
