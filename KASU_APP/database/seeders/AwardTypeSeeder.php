<?php

namespace Database\Seeders;

use App\Models\AwardType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AwardTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $awards = [
            [
                'name' => 'Certificate',
                'duration' => '1 Year',
            ],

            [
                'name' => 'Diploma',
                'duration' => '2 Years',
            ],

            [
                'name' => 'Bachelor\'s Degree',
                'duration' => '4 Years',
            ],

            [
                'name' => 'PGD',
                'duration' => '1 Year'
            ],

            [
                'name' => 'Masters Degree',
                'duration' => '2 Years',
            ],



            [
                'name' => 'Master of Philosophy',
                'duration' => '2 Years'
            ],

            [
                'name' => 'Doctor of Philosophy',
                'duration' => '3 Years'
            ]
        ];

        foreach($awards as $award) {
            AwardType::create($award);
        }
    }
}
