<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert s
        DB::statement($this->getQuery());
    }

    private function getQuery()
    {
        return "INSERT INTO states (id, country_id, state_name) VALUES
        (1, 126, 'Abia'),
        (2, 126, 'Adamawa'),
        (3, 126, 'Akwa Ibom'),
        (4, 126, 'Anambra'),
        (5, 126, 'Bauchi'),
        (6, 126, 'Bayelsa'),
        (7, 126, 'Benue'),
        (8, 126, 'Borno'),
        (9, 126, 'Cross River'),
        (10, 126, 'Delta'),
        (11, 126, 'Ebonyi'),
        (12, 126, 'Edo'),
        (13, 126, 'Ekiti'),
        (14, 126, 'Enugu'),
        (15, 126, 'FCT'),
        (16, 126, 'Gombe'),
        (17, 126, 'Imo'),
        (18, 126, 'Jigawa'),
        (19, 126, 'Kaduna'),
        (20, 126, 'Kano'),
        (21, 126, 'Katsina'),
        (22, 126, 'Kebbi'),
        (23, 126, 'Kogi'),
        (24, 126, 'Kwara'),
        (25, 126, 'Lagos'),
        (26, 126, 'Nasarawa'),
        (27, 126, 'Niger'),
        (28, 126, 'Ogun'),
        (29, 126, 'Ondo'),
        (30, 126, 'Osun'),
        (31, 126, 'Oyo'),
        (32, 126, 'Plateau'),
        (33, 126, 'Rivers'),
        (34, 126, 'Sokoto'),
        (35, 126, 'Taraba'),
        (36, 126, 'Yobe'),
        (37, 126, 'Zamfara')";
    }
}
