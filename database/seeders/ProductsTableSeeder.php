<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 0; $i < 10; $i++) {
            DB::table('products')->insert([
                'name' => 'Product ' . Str::random(5), // Generating random product names
                'description' => 'This is a description for product ' . $i,
                'category_id' => rand(1, 5), // Assuming there are 5 categories
                'created_by' => rand(1, 10), // Assuming there are 10 users
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
