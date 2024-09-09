<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionHistoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $transactions = [
            [
                'user_id' => 1,
                'auction_id' => 1,
                'amount' => 250.00,
                'transaction_type' => 'payment',
                'status' => 'completed',
            ],
            [
                'user_id' => 2,
                'auction_id' => 2,
                'amount' => 500.00,
                'transaction_type' => 'deposit',
                'status' => 'pending',
            ],
            [
                'user_id' => 3,
                'auction_id' => 3,
                'amount' => 100.00,
                'transaction_type' => 'withdrawal',
                'status' => 'failed',
            ],
            // Add more transactions as needed
        ];

        foreach ($transactions as $transaction) {
            DB::table('transaction_histories')->insert(array_merge($transaction, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
