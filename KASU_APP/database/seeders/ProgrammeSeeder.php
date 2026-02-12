<?php

namespace Database\Seeders;

use App\Models\Programme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class ProgrammeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $programmes = [
            [
                'department_id' => 1,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Banking and Finance',
                'code' => 'B.Sc-BNF',
                'app_close_date' => Date::now()
            ],
            [
                'department_id' => 2,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Entrepreneurship',
                'code' => 'B.Sc-ENT',
                'app_close_date' => Date::now()
            ],
            [
                'department_id' => 2,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Business Administration',
                'code' => 'B.Sc-BUS',
                'app_close_date' => Date::now()
            ],
            [
                'department_id' => 3,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Marketing',
                'code' => 'B.Sc-MKT',
                'app_close_date' => Date::now()
            ],
            [
                'department_id' => 4,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Public Adminstration',
                'code' => 'B.Sc-PAD',
                'app_close_date' => Date::now()
            ],
            [
                'department_id' => 5,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Accounting',
                'code' => 'B.Sc-ACC',
                'app_close_date' => Date::now()
            ],
            [
                'department_id' => 6,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Procurement Management',
                'code' => 'B.Sc-PRM',
                'app_close_date' => Date::now()
            ],
            [
                'department_id' => 6,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Logistic and Supply Chain Management',
                'code' => 'B.Sc-LSM',
                'app_close_date' => Date::now()
            ],

            [
                'department_id' => 7,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Industrial Relations & Personnel Management',
                'code' => 'B.Sc-IRM',
                'app_close_date' => Date::now()
            ],

            [
                'department_id' => 8,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Sociology',
                'code' => 'B.Sc-SOC',
                'app_close_date' => Date::now()
            ],
            [
                'department_id' => 9,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Criminology & Security Studies',
                'code' => 'B.Sc-CSS',
                'app_close_date' => Date::now()
            ],
            [
                'department_id' => 10,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Economics',
                'code' => 'B.Sc-ECN',
                'app_close_date' => Date::now()
            ],
            [
                'department_id' => 11,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Political Science',
                'code' => 'B.Sc-POL',
                'app_close_date' => Date::now()
            ],
            [
                'department_id' => 11,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'International Relations & Diplomacy',
                'code' => 'B.Sc-IRD',
                'app_close_date' => Date::now()
            ],
            [
                'department_id' => 12,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Library and Information Sciences',
                'code' => 'B.Sc-LIS',
                'app_close_date' => Date::now()
            ],

            [
                'department_id' => 13,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Mass Communication',
                'code' => 'B.Sc-MCM',
                'app_close_date' => Date::now()
            ],

            [
                'department_id' => 14,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Journalism and Media Studies',
                'code' => 'B.Sc-JMS',
                'app_close_date' => Date::now()
            ],

            [
                'department_id' => 15,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Broadcasting',
                'code' => 'B.Sc-JMS',
                'app_close_date' => Date::now()
            ],

            [
                'department_id' => 16,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Theatre Arts',
                'code' => 'B.A-TRA',
                'app_close_date' => Date::now()
            ],

            [
                'department_id' => 17,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Arabic',
                'code' => 'B.A-ARB',
                'app_close_date' => Date::now()
            ],

            [
                'department_id' => 18,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'History and Strategic Studies',
                'code' => 'B.A-HSS',
                'app_close_date' => Date::now()
            ],

            [
                'department_id' => 19,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Islamic Studies',
                'code' => 'B.A-ISL',
                'app_close_date' => Date::now()
            ],

            [
                'department_id' => 20,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Christian Religious Studies',
                'code' => 'B.A-CRS',
                'app_close_date' => Date::now()
            ],

            [
                'department_id' => 21,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'English',
                'code' => 'B.A-ENG',
                'app_close_date' => Date::now()
            ],

            [
                'department_id' => 22,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Linguistics',
                'code' => 'B.A-LIN',
                'app_close_date' => Date::now()
            ],

            [
                'department_id' => 23,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'French',
                'code' => 'B.A-FRN',
                'app_close_date' => Date::now()
            ],

            [
                'department_id' => 23,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Hausa',
                'code' => 'B.A-HAU',
                'app_close_date' => Date::now()
            ],

        ];

        foreach ($programmes as $programme) {
            Programme::create($programme);
        }
    }
}
