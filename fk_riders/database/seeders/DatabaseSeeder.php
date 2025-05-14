<?php

namespace Database\Seeders;

use App\Models\Payments;
use App\Models\Products;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersSeeder::class,
            ProductsSeeder::class,
            PaymentsSeeder::class
        ]);
        // User::factory()->count(10)->create();
        // Products::factory()->count(10)->create();
        // Payments::factory()->count(10)->create();
    }
}
