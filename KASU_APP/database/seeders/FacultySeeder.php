<?php

namespace Database\Seeders;

use App\Models\Faculty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faculties = [
            [
                'name' => 'Management Sciences',
                'code' => 'MSC'
            ],

            [
                'name' => 'Social Sciences',
                'code' => 'SSC'
            ],

            [
                'name' => 'Communication',
                'code' => 'COM'
            ],

            [
                'name' => 'Arts',
                'code' => 'ART'
            ],

            [
                'name' => 'Education',
                'code' => 'EDU'
            ],

            [
                'name' => 'Life Sciences',
                'code' => 'LSC'
            ],

            [
                'name' => 'Physical Sciences',
                'code' => 'PSC'
            ],

            [
                'name' => 'Earth Sciences and Sustainability Studies',
                'code' => 'ESS'
            ],

            [
                'name' => 'Computing',
                'code' => 'CPT'
            ],

            [
                'name' => 'Engineering',
                'code' => 'ENG'
            ],

            [
                'name' => 'Architecture',
                'code' => 'ARC'
            ],

            [
                'name' => 'Agriculture',
                'code' => 'AGR'
            ],

            [
                'name' => 'Environmental Management',
                'code' => 'ENV'
            ],

            [
                'name' => 'Medicine and Surgery',
                'code' => 'MED'
            ],

            [
                'name' => 'Pharmaceutical Sciences',
                'code' => 'MSC'
            ],

            [
                'name' => 'Allied Health Sciences',
                'code' => 'AHS'
            ],

            [
                'name' => 'Institute of Science, Technology, and Management Studies',
                'code' => 'ISTMS'
            ],

            [
                'name' => 'Institute of Education',
                'code' => 'IE'
            ]

        ];

        foreach($faculties as $faculty) {
            Faculty::updateOrCreate(
                ['code' => $faculty['code']],
                [
                    'name' => $faculty['name'],
                    'code' => $faculty['code']
                ]
            );
        }
    }
}
