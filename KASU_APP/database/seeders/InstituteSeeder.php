<?php

namespace Database\Seeders;

use App\Models\Institute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstituteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $institutes = [
            [
                'name' => 'Institute of Science, Technology, and Management Studies',
                'code' => 'ISTMS'
            ],

            [
                'name' => 'Institute of Education',
                'code' => 'IE'
            ]
        ];


        foreach($institutes as $institute) {
            Institute::updateOrCreate(
                ['code' => $institute['code']],
                [
                    'name' => $institute['name'],
                    'code' => $institute['code']
                ]
            );
        }
    }
}
