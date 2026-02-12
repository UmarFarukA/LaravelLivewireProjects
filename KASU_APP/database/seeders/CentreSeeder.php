<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CentreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $centres = [
            [
                'institute_id' => 1,
                'name' => 'Centre for Information and Communication Technology',
                'code' => 'CICT'
            ],

            [
                'institute_id' => 1,
                'name' => 'Centre for Energy, Environment, and Strategy Research',
                'code' => 'CEESR'
            ],

            [
                'institute_id' => 1,
                'name' => 'Centre for Gender Studies',
                'code' => 'CGS'
            ],

            [
                'institute_id' => 1,
                'name' => 'Centre for Procurement and Supply Chain Management',
                'code' => 'CPSCM'
            ]
        ];
    }
}
