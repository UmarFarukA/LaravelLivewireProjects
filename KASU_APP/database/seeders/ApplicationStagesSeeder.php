<?php

namespace Database\Seeders;

use App\Models\ApplicationStage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApplicationStagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stages = [
            [
                'name' => 'Programme Selection',
                'slug' => 'programme-selection',
                'order' => 1,
                'description' => 'Select the programme to apply for',
            ],
            [
                'name' => 'Payment',
                'slug' => 'payment',
                'order' => 2,
                'description' => 'Pay application fee',
            ],
            [
                'name' => 'Bio-data',
                'slug' => 'bio-data',
                'order' => 3,
                'description' => 'Personal information of the applicant',
            ],
            [
                'name' => 'Parent/Guardian',
                'slug' => 'parent-guardian',
                'order' => 4,
                'description' => 'Parent or guardian information',
            ],


            [
                'name' => 'O-Level',
                'slug' => 'o-level',
                'order' => 5,
                'description' => 'O-Level examination results',
            ],
            [
                'name' => 'A-Level',
                'slug' => 'a-level',
                'order' => 6,
                'description' => 'A-Level or IJMB results (where applicable)',
            ],

            [
                'name' => 'Referee',
                'slug' => 'referee',
                'order' => 7,
                 'description' => 'Referee information',
            ],
            [
                'name' => 'Attestation',
                'slug' => 'attestation',
                'order' => 8,
                'description' => 'Final declaration and submission',
            ],
        ];

        foreach($stages as $stage){
            ApplicationStage::updateOrCreate(
                ['slug' => $stage['slug']],
                [
                    'name' => $stage['name'],
                    'description' => $stage['description'],
                    'order'=> $stage['order']
                ]
            );
        }
    }
}
