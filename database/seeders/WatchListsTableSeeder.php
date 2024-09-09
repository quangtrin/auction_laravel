<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WatchListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $watchLists = [
            [
                'user_id' => 1,
                'auction_id' => 1,
            ],
            [
                'user_id' => 1,
                'auction_id' => 2,
            ],
            [
                'user_id' => 2,
                'auction_id' => 3,
            ],
            [
                'user_id' => 3,
                'auction_id' => 4,
            ],
            [
                'user_id' => 3,
                'auction_id' => 5,
            ],
            // Add more watch lists as needed
        ];

        foreach ($watchLists as $watchList) {
            DB::table('watch_lists')->insert(array_merge($watchList, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
