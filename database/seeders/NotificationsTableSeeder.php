<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $notifications = [
            [
                'user_id' => 1,
                'type' => 'Alert',
                'message' => 'Your auction has been successfully created.',
                'is_read' => false,
            ],
            [
                'user_id' => 2,
                'type' => 'Reminder',
                'message' => 'Your auction ends in 24 hours.',
                'is_read' => false,
            ],
            [
                'user_id' => 3,
                'type' => 'Update',
                'message' => 'A new bid has been placed on your auction.',
                'is_read' => true,
            ],
            // Add more notifications as needed
        ];

        foreach ($notifications as $notification) {
            DB::table('notifications')->insert(array_merge($notification, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
