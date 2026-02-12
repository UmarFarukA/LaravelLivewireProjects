<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            ApplicationStagesSeeder::class,
            ApplicationFormSeeder::class,
            CountrySeeder::class,
            StateSeeder::class,
            LgaSeeder::class,
            FacultySeeder::class,
            DepartmentSeeder::class,
            ProgrammeSeeder::class
        ]);
    }
}
