<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        {
            // Example: Assign roles to users. Adjust the numbers as needed.
            $userRoleAssignments = [
                ['user_id' => 1, 'role_id' => 1], // User 1 is an Admin
                ['user_id' => 2, 'role_id' => 2], // User 2 is a User
                ['user_id' => 3, 'role_id' => 3], // User 3 is a Moderator
                ['user_id' => 4, 'role_id' => 4], // User 4 is a Seller
                ['user_id' => 5, 'role_id' => 5], // User 5 is a Buyer
                ['user_id' => 6, 'role_id' => 2], // User 5 is a Buyer
                ['user_id' => 7, 'role_id' => 5], // User 5 is a Buyer
                ['user_id' => 8, 'role_id' => 5], // User 5 is a Buyer
                ['user_id' => 9, 'role_id' => 5], // User 5 is a Buyer
                ['user_id' => 10, 'role_id' => 5], // User 5 is a Buyer
            ];

            DB::table('user_roles')->insert($userRoleAssignments);
        }
    }
}
