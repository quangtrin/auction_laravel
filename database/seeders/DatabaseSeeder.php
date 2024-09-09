<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            AuctionsTableSeeder::class,
            BidsTableSeeder::class,
            WinnersTableSeeder::class,
            ProductsTableSeeder::class,
            CategoriesTableSeeder::class,
            PaymentsTableSeeder::class,
            ReviewsTableSeeder::class,
            RolesTableSeeder::class,
            UserRolesTableSeeder::class,
            AddressesTableSeeder::class,
            NotificationsTableSeeder::class,
            TransactionHistoriesTableSeeder::class,
            WatchListsTableSeeder::class,
            ShippingDetailsTableSeeder::class,
        ]);
    }
}
