<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $addresses = [
            [
                'user_id' => 1,
                'address_line_1' => '123 Main St',
                'address_line_2' => 'Apt 4B',
                'city' => 'Springfield',
                'state' => 'IL',
                'country' => 'USA',
                'postal_code' => '62701',
            ],
            [
                'user_id' => 2,
                'address_line_1' => '456 Elm St',
                'address_line_2' => null,
                'city' => 'Shelbyville',
                'state' => 'IL',
                'country' => 'USA',
                'postal_code' => '62565',
            ],
            // Add more addresses as needed
        ];

        foreach ($addresses as $address) {
            DB::table('addresses')->insert(array_merge($address, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
