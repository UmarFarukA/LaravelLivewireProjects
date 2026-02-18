<?php

namespace Database\Seeders;

use App\Models\AvailableProgramme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AvailableFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $availableprogrammes = [
            [
                'application_form_id' => 1,
                'programme_id' => 4,
                'academic_session' => '2025/2026',
                'application_fee' => 10000,
                'app_start_date' => '2026-02-01',
                'app_close_date' => '2026-03-30',
                'opend_by' => 1
            ],

            [
                'application_form_id' => 1,
                'programme_id' => 5,
                'academic_session' => '2025/2026',
                'application_fee' => 10000,
                'app_start_date' => '2026-02-01',
                'app_close_date' => '2026-03-30',
                'opend_by' => 1
            ],

            [
                'application_form_id' => 1,
                'programme_id' => 6,
                'academic_session' => '2025/2026',
                'application_fee' => 10000,
                'app_start_date' => '2026-02-01',
                'app_close_date' => '2026-03-30',
                'opend_by' => 1
            ],

            [
                'application_form_id' => 2,
                'programme_id' => 1,
                'academic_session' => '2025/2026',
                'application_fee' => 10000,
                'app_start_date' => '2026-02-01',
                'app_close_date' => '2026-03-30',
                'opend_by' => 1
            ],

            [
                'application_form_id' => 2,
                'programme_id' => 2,
                'academic_session' => '2025/2026',
                'application_fee' => 10000,
                'app_start_date' => '2026-02-01',
                'app_close_date' => '2026-03-30',
                'opend_by' => 1
            ],

            [
                'application_form_id' => 2,
                'programme_id' => 3,
                'academic_session' => '2025/2026',
                'application_fee' => 10000,
                'app_start_date' => '2026-02-01',
                'app_close_date' => '2026-03-30',
                'opend_by' => 1
            ],

            [
                'application_form_id' => 3,
                'programme_id' => 1,
                'academic_session' => '2025/2026',
                'application_fee' => 10000,
                'app_start_date' => '2026-02-01',
                'app_close_date' => '2026-03-30',
                'opend_by' => 1
            ]
        ];

        foreach ($availableprogrammes as $availableprogramme) {
            AvailableProgramme::create($availableprogramme);
        }
    }
}
