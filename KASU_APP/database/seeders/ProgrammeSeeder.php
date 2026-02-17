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
                'code' => 'B.Sc-BNF'
            ],

            [
                'department_id' => 2,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Entrepreneurship',
                'code' => 'B.Sc-ENT'
            ],

            [
                'department_id' => 2,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Business Administration',
                'code' => 'B.Sc-BUS'
            ],

            [
                'department_id' => 2,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Entrepreneurship Studies',
                'code' => 'PGD-ENS'
            ],

            [
                'department_id' => 2,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Management',
                'code' => 'PGD-MGT'
            ],

            [
                'department_id' => 2,
                'award_type_id' => 8,
                'application_form_id' => 1,
                'name' => 'Masters in Banking and Finance',
                'code' => 'M-BNF'
            ],

            [
                'department_id' => 2,
                'award_type_id' => 8,
                'application_form_id' => 1,
                'name' => 'Masters in Industrial & Labour Relations',
                'code' => 'M-ILR'
            ],

            [
                'department_id' => 2,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Business Adminstration',
                'code' => 'MSc-BUS'
            ],

            [
                'department_id' => 2,
                'award_type_id' => 7,
                'application_form_id' => 1,
                'name' => 'PhD Business Adminstration',
                'code' => 'PhD-BUS'
            ],

            [
                'department_id' => 2,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Entrepreneurship Studies',
                'code' => 'PGD-ENS'
            ],

            [
                'department_id' => 3,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Marketing',
                'code' => 'B.Sc-MKT'
            ],

            [
                'department_id' => 3,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Marketing',
                'code' => 'PGD-MKT'
            ],

            [
                'department_id' => 3,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Marketing',
                'code' => 'MSc-MKT'
            ],

            [
                'department_id' => 4,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Public Adminstration',
                'code' => 'B.Sc-PAD'
            ],

            [
                'department_id' => 5,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Accounting',
                'code' => 'B.Sc-ACC'
            ],

            [
                'department_id' => 5,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Accounting',
                'code' => 'PGD-ACC'
            ],

            [
                'department_id' => 5,
                'award_type_id' => 8,
                'application_form_id' => 1,
                'name' => 'Masters in Accounting',
                'code' => 'M-ACC'
            ],

            [
                'department_id' => 5,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Accounting',
                'code' => 'MSc-ACC'
            ],

            [
                'department_id' => 5,
                'award_type_id' => 7,
                'application_form_id' => 1,
                'name' => 'PhD Accounting',
                'code' => 'PhD-ACC'
            ],

            [
                'department_id' => 6,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Procurement Management',
                'code' => 'B.Sc-PRM'
            ],

            [
                'department_id' => 6,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Procurement & Supply Chain Management',
                'code' => 'PGD-PSCHM'
            ],

            [
                'department_id' => 6,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Logistics & Supply Chain Management',
                'code' => 'PGD-LSCHM'
            ],

            [
                'department_id' => 6,
                'award_type_id' => 8,
                'application_form_id' => 1,
                'name' => 'Masters in Procurement & Supply Chain Management',
                'code' => 'M-PSCHM'
            ],

            [
                'department_id' => 6,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Logistic and Supply Chain Management',
                'code' => 'B.Sc-LSM'
            ],

            [
                'department_id' => 7,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Industrial Relations & Personnel Management',
                'code' => 'B.Sc-IRM',
            ],

            [
                'department_id' => 8,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Sociology',
                'code' => 'B.Sc-SOC',
            ],

            [
                'department_id' => 8,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Crime Management',
                'code' => 'PGD-CMT',
            ],

            [
                'department_id' => 8,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Social Works',
                'code' => 'PGD-SWK',
            ],

            [
                'department_id' => 8,
                'award_type_id' => 8,
                'application_form_id' => 1,
                'name' => 'Masters in Social Works',
                'code' => 'M-SWK',
            ],

            [
                'department_id' => 8,
                'award_type_id' => 8,
                'application_form_id' => 1,
                'name' => 'Masters in Criminal Justice',
                'code' => 'M-CMJ',
            ],

            [
                'department_id' => 8,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Sociology',
                'code' => 'MSc-SOC',
            ],

            [
                'department_id' => 8,
                'award_type_id' => 6,
                'application_form_id' => 1,
                'name' => 'MPhil Sociology',
                'code' => 'MPhil-SOC',
            ],

            [
                'department_id' => 8,
                'award_type_id' => 7,
                'application_form_id' => 1,
                'name' => 'PhD Sociology',
                'code' => 'PhD-SOC',
            ],

            [
                'department_id' => 9,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Criminology & Security Studies',
                'code' => 'B.Sc-CSS',
            ],

            [
                'department_id' => 10,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Economics',
                'code' => 'B.Sc-ECN',
            ],

            [
                'department_id' => 10,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Health Economics',
                'code' => 'PGD-HEC',
            ],

            [
                'department_id' => 10,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Public Sector Economics',
                'code' => 'PGD-PSE',
            ],

            [
                'department_id' => 10,
                'award_type_id' => 8,
                'application_form_id' => 1,
                'name' => 'Masters in Public Sector Economics',
                'code' => 'PGD-PSE',
            ],

            [
                'department_id' => 10,
                'award_type_id' => 8,
                'application_form_id' => 1,
                'name' => 'Masters in Development Studies and Policy Analysis',
                'code' => 'M-DSPA',
            ],

            [
                'department_id' => 10,
                'award_type_id' => 8,
                'application_form_id' => 1,
                'name' => 'Masters in Financial Economics',
                'code' => 'M-FIE',
            ],

            [
                'department_id' => 10,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Economics',
                'code' => 'MSc-ECN',
            ],

            [
                'department_id' => 10,
                'award_type_id' => 6,
                'application_form_id' => 1,
                'name' => 'MPhil Economics',
                'code' => 'MPhil-ECN',
            ],

            [
                'department_id' => 10,
                'award_type_id' => 6,
                'application_form_id' => 1,
                'name' => 'MPhil Development Studies and Policy Analysis',
                'code' => 'MPhil-DSPA',
            ],

            [
                'department_id' => 10,
                'award_type_id' => 7,
                'application_form_id' => 1,
                'name' => 'PhD Economics',
                'code' => 'PhD-ECN',
            ],

            [
                'department_id' => 11,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Political Science',
                'code' => 'B.Sc-POL',
            ],

            [
                'department_id' => 11,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Conflict, Peace and Strategic Studies',
                'code' => 'PGD-CPSS',
            ],

            [
                'department_id' => 11,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Political Science',
                'code' => 'PGD-POL',
            ],

            [
                'department_id' => 11,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Electoral Management',
                'code' => 'PGD-ELM',
            ],

            [
                'department_id' => 11,
                'award_type_id' => 8,
                'application_form_id' => 1,
                'name' => 'Masters in Conflict, Peace and Strategic Studies',
                'code' => 'M-CPSS',
            ],

            [
                'department_id' => 11,
                'award_type_id' => 8,
                'application_form_id' => 1,
                'name' => 'Masters in Security Studies',
                'code' => 'M-SCS',
            ],

            [
                'department_id' => 11,
                'award_type_id' => 6,
                'application_form_id' => 1,
                'name' => 'MPhil Conflict, Peace and Strategic Studies',
                'code' => 'MPhil-CPSS',
            ],

            [
                'department_id' => 11,
                'award_type_id' => 7,
                'application_form_id' => 1,
                'name' => 'PhD Political Science',
                'code' => 'PhD-POL',
            ],

            [
                'department_id' => 11,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'International Relations & Diplomacy',
                'code' => 'B.Sc-IRD',
            ],
            [
                'department_id' => 12,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Library and Information Sciences',
                'code' => 'B.Sc-LIS',
            ],

            [
                'department_id' => 13,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Mass Communication',
                'code' => 'B.Sc-MCM',
            ],

            [
                'department_id' => 13,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Investigative Journalism',
                'code' => 'PGD-IVJ',
            ],

            [
                'department_id' => 13,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Mass Communication',
                'code' => 'PGD-MCM',
            ],

            [
                'department_id' => 13,
                'award_type_id' => 8,
                'application_form_id' => 1,
                'name' => 'Masters Mass Communication',
                'code' => 'M-MCM',
            ],

            [
                'department_id' => 13,
                'award_type_id' => 8,
                'application_form_id' => 1,
                'name' => 'Masters in Development Communication',
                'code' => 'M-DTC',
            ],

            [
                'department_id' => 13,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Mass Communication',
                'code' => 'MSc-MCM',
            ],

            [
                'department_id' => 13,
                'award_type_id' => 7,
                'application_form_id' => 1,
                'name' => 'PhD Mass Communication',
                'code' => 'PhD-MCM',
            ],

            [
                'department_id' => 14,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Journalism and Media Studies',
                'code' => 'B.Sc-JMS',
            ],

            [
                'department_id' => 15,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Broadcasting',
                'code' => 'B.Sc-JMS',
            ],

            [
                'department_id' => 16,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Theatre Arts',
                'code' => 'B.A-TRA',
            ],

            [
                'department_id' => 17,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Arabic',
                'code' => 'B.A-ARB',
            ],

            [
                'department_id' => 17,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Arabic',
                'code' => 'PGD-ARB',
            ],

            [
                'department_id' => 17,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'M.A Arabic',
                'code' => 'MA-ARB',
            ],

            [
                'department_id' => 17,
                'award_type_id' => 7,
                'application_form_id' => 1,
                'name' => 'PhD Arabic',
                'code' => 'PhD-ARB',
            ],

            [
                'department_id' => 18,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'History and Strategic Studies',
                'code' => 'B.A-HSS',
            ],

            [
                'department_id' => 18,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'M.A History',
                'code' => 'MA-HIS',
            ],

            [
                'department_id' => 18,
                'award_type_id' => 7,
                'application_form_id' => 1,
                'name' => 'PhD History',
                'code' => 'PhD-HIS',
            ],

            [
                'department_id' => 19,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Islamic Studies',
                'code' => 'B.A-ISL',
            ],

            [
                'department_id' => 19,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Islamic Studies',
                'code' => 'PGD-ISL',
            ],

            [
                'department_id' => 19,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'M.A Islamic Studies',
                'code' => 'MA-ISL',
            ],

            [
                'department_id' => 19,
                'award_type_id' => 7,
                'application_form_id' => 1,
                'name' => 'PhD Islamic Studies',
                'code' => 'PhD-ISL',
            ],

            [
                'department_id' => 20,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Christian Religious Studies',
                'code' => 'B.A-CRS',
            ],

            [
                'department_id' => 20,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Christian Religious Studies',
                'code' => 'PGD-CRS',
            ],

            [
                'department_id' => 20,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'M.A Christian Religious Studies',
                'code' => 'MA-CRS',
            ],

            [
                'department_id' => 20,
                'award_type_id' => 6,
                'application_form_id' => 1,
                'name' => 'MPhil Christian Religious Studies',
                'code' => 'MPhil-CRS',
            ],

            [
                'department_id' => 20,
                'award_type_id' => 7,
                'application_form_id' => 1,
                'name' => 'PhD Christian Religious Studies',
                'code' => 'PhD-CRS',
            ],

            [
                'department_id' => 21,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'English',
                'code' => 'B.A-ENG',
            ],

            [
                'department_id' => 21,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD English and Literary Studies',
                'code' => 'PGD-ENG',
            ],

            [
                'department_id' => 21,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'M.A English Language',
                'code' => 'MA-ENGLANG',
            ],

            [
                'department_id' => 21,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'M.A English Literature',
                'code' => 'MA-ENGLIT',
            ],

            [
                'department_id' => 21,
                'award_type_id' => 6,
                'application_form_id' => 1,
                'name' => 'MPhil - English Language',
                'code' => 'MPhil-ENGLANG',
            ],

            [
                'department_id' => 21,
                'award_type_id' => 6,
                'application_form_id' => 1,
                'name' => 'MPhil - English Literature',
                'code' => 'MPhil-ENGLANG',
            ],

            [
                'department_id' => 21,
                'award_type_id' => 7,
                'application_form_id' => 1,
                'name' => 'PhD - English Language',
                'code' => 'PhD-ENGLANG',
            ],

            [
                'department_id' => 21,
                'award_type_id' => 7,
                'application_form_id' => 1,
                'name' => 'PhD - English Literature',
                'code' => 'PhD-ENGLIT',
            ],

            [
                'department_id' => 22,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Linguistics',
                'code' => 'B.A-LIN',
            ],

            [
                'department_id' => 23,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'French',
                'code' => 'B.A-FRN',
            ],

            [
                'department_id' => 23,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD French',
                'code' => 'PGD-FRN',
            ],

            [
                'department_id' => 24,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Hausa',
                'code' => 'B.A-HAU',
            ],

            [
                'department_id' => 24,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'M.A Hausa',
                'code' => 'MA-HAU',
            ],

            [
                'department_id' => 25,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Educantion and Arabic',
                'code' => 'B.Ed-EDARB',
            ],

            [
                'department_id' => 26,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Educantion and Biology',
                'code' => 'B.Ed-EDBIO',
            ],

            [
                'department_id' => 27,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Educantion and Chemistry',
                'code' => 'B.Ed-EDCHM',
            ],

            [
                'department_id' => 28,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Educantion and Christian Religios Studies',
                'code' => 'B.Ed-EDCRS',
            ],

            [
                'department_id' => 29,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Educantion and Economics',
                'code' => 'B.Ed-EDECN',
            ],

            [
                'department_id' => 30,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Educantion and English',
                'code' => 'B.Ed-EDENG',
            ],

            [
                'department_id' => 31,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Educantion and Geography',
                'code' => 'B.Ed-ED',
            ],

            [
                'department_id' => 32,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Educantion and Hausa',
                'code' => 'B.Ed-EDHAU',
            ],

            [
                'department_id' => 33,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Educantion and Islamic Studies',
                'code' => 'B.Ed-ED',
            ],

            [
                'department_id' => 34,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Educantion and Mathematics',
                'code' => 'B.Ed-EDMTH',
            ],

            [
                'department_id' => 35,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Educantion and Physics',
                'code' => 'B.Ed-EDPHY',
            ],

            [
                'department_id' => 75,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Educantion',
                'code' => 'PGD-EDU',
            ],

            [
                'department_id' => 75,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Consoling & Human Development',
                'code' => 'PGD-CHD',
            ],

            [
                'department_id' => 36,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Biochemistry',
                'code' => 'B.Sc.-BCH',
            ],

            [
                'department_id' => 36,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Biochemistry',
                'code' => 'PGD-BCH',
            ],

            [
                'department_id' => 36,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Nutrition',
                'code' => 'PGD-NUT',
            ],

            [
                'department_id' => 36,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Nutrition',
                'code' => 'MSc-NUT',
            ],

            [
                'department_id' => 36,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Biochemistry',
                'code' => 'MSc-BCH',
            ],

            [
                'department_id' => 36,
                'award_type_id' => 6,
                'application_form_id' => 1,
                'name' => 'MPhil Biochemistry',
                'code' => 'MPhil-BCH',
            ],

            [
                'department_id' => 36,
                'award_type_id' => 7,
                'application_form_id' => 1,
                'name' => 'PhD Biochemistry',
                'code' => 'PhD-BCH',
            ],

            [
                'department_id' => 37,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Biotechnology',
                'code' => 'B.Sc.-BTE',
            ],

            [
                'department_id' => 37,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Biotechnology',
                'code' => 'MSc-BTE',
            ],

            [
                'department_id' => 38,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Biology',
                'code' => 'B.Sc.-BIO',
            ],

            [
                'department_id' => 38,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Fisheries and Aquaculture',
                'code' => 'PGD-FAC',
            ],

            [
                'department_id' => 38,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Environmental Biology',
                'code' => 'PGD-EVB',
            ],

            [
                'department_id' => 38,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Entomology',
                'code' => 'PGD-ETG',
            ],

            [
                'department_id' => 38,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Biology',
                'code' => 'PGD-BIO',
            ],

            [
                'department_id' => 38,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Biology',
                'code' => 'MSc-BIO',
            ],

            [
                'department_id' => 38,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Fisheries and Aquaculture',
                'code' => 'MSc-FAC',
            ],

            [
                'department_id' => 38,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Entomology',
                'code' => 'MSc-ETG',
            ],

            [
                'department_id' => 38,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Environmental Biology',
                'code' => 'MSc-EVB',
            ],

            [
                'department_id' => 38,
                'award_type_id' => 6,
                'application_form_id' => 1,
                'name' => 'MPhil Biology',
                'code' => 'MPhil-BIO',
            ],

            [
                'department_id' => 38,
                'award_type_id' => 7,
                'application_form_id' => 1,
                'name' => 'PhD Biology',
                'code' => 'PhD-BIO',
            ],

            [
                'department_id' => 39,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Microbiology',
                'code' => 'B.Sc.-MCB',
            ],

            [
                'department_id' => 39,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Microbiology',
                'code' => 'PGD-MCB',
            ],

            [
                'department_id' => 39,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Environmental Biology',
                'code' => 'MSc-EVB'
            ],

            [
                'department_id' => 39,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Microbiology',
                'code' => 'MSc-MCB',
            ],

            [
                'department_id' => 39,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Food and Industrial Microbiology',
                'code' => 'MSc-FIM',
            ],

            [
                'department_id' => 39,
                'award_type_id' => 6,
                'application_form_id' => 1,
                'name' => 'MPhil Microbiology',
                'code' => 'MPhil-MCB',
            ],

            [
                'department_id' => 39,
                'award_type_id' => 7,
                'application_form_id' => 1,
                'name' => 'PhD Microbiology',
                'code' => 'PhD-MCB',
            ],

            [
                'department_id' => 39,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Microbiology',
                'code' => 'PGD-MCB',
            ],

            [
                'department_id' => 40,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Chemistry',
                'code' => 'B.Sc.-CHM',
            ],

            [
                'department_id' => 40,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Industrial Chemistry',
                'code' => 'B.Sc.-ICH',
            ],

            [
                'department_id' => 40,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Industrial Chemistry',
                'code' => 'PGD-ICH',
            ],

            [
                'department_id' => 40,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Forensic Chemistry',
                'code' => 'PGD-FRC',
            ],

            [
                'department_id' => 40,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Forensic Chemistry',
                'code' => 'MSc-FRC',
            ],

            [
                'department_id' => 40,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Chemistry',
                'code' => 'MSc-CHM',
            ],

            [
                'department_id' => 40,
                'award_type_id' => 6,
                'application_form_id' => 1,
                'name' => 'MPhil Chemistry',
                'code' => 'MPhil-CHM',
            ],

            [
                'department_id' => 40,
                'award_type_id' => 7,
                'application_form_id' => 1,
                'name' => 'PhD Chemistry',
                'code' => 'PhD-CHM',
            ],

            [
                'department_id' => 41,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Physics',
                'code' => 'B.Sc.-PHY',
            ],

            [
                'department_id' => 41,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Physics',
                'code' => 'PGD-PHY',
            ],

            [
                'department_id' => 41,
                'award_type_id' => 8,
                'application_form_id' => 1,
                'name' => 'Masters in Renewable Energy',
                'code' => 'M-RWE',
            ],

            [
                'department_id' => 41,
                'award_type_id' => 8,
                'application_form_id' => 1,
                'name' => 'Masters in Environmental Sustainability Management',
                'code' => 'M-ESM',
            ],

            [
                'department_id' => 41,
                'award_type_id' => 8,
                'application_form_id' => 1,
                'name' => 'Masters in Energy Management',
                'code' => 'M-EGM',
            ],

            [
                'department_id' => 41,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Physics',
                'code' => 'MSc-PHY',
            ],

            [
                'department_id' => 41,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Applied Geophysics',
                'code' => 'MSc-AGP',
            ],

            [
                'department_id' => 41,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Solid State Physics',
                'code' => 'MSc-SSP',
            ],

            [
                'department_id' => 41,
                'award_type_id' => 6,
                'application_form_id' => 1,
                'name' => 'MPhil Physics',
                'code' => 'MPhil-PHY',
            ],

            [
                'department_id' => 41,
                'award_type_id' => 7,
                'application_form_id' => 1,
                'name' => 'PhD Physics',
                'code' => 'PhD-PHY',
            ],

            [
                'department_id' => 41,
                'award_type_id' => 7,
                'application_form_id' => 1,
                'name' => 'PhD Geophysics',
                'code' => 'PhD-GEP',
            ],

            [
                'department_id' => 42,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Mathematics',
                'code' => 'B.Sc.-MTH',
            ],

            [
                'department_id' => 42,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Mathematics',
                'code' => 'PGD-MTH',
            ],

            [
                'department_id' => 42,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Industrial Mathematics',
                'code' => 'PGD-IMT',
            ],

            [
                'department_id' => 42,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Statistics and Data Analytics',
                'code' => 'PGD-SDA',
            ],

            [
                'department_id' => 42,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Mathematics',
                'code' => 'MSc-MTH',
            ],

            [
                'department_id' => 42,
                'award_type_id' => 6,
                'application_form_id' => 1,
                'name' => 'MPhil Mathematics',
                'code' => 'MPhil-MTH',
            ],

            [
                'department_id' => 42,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PhD Mathematics',
                'code' => 'PhD-MTH',
            ],

            [
                'department_id' => 43,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Statistics',
                'code' => 'B.Sc.-STA',
            ],

            [
                'department_id' => 44,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Gography and Sustainability Studies',
                'code' => 'B.Sc.-GSS',
            ],

            [
                'department_id' => 44,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Geographic Information System',
                'code' => 'PGD-GIS',
            ],

            [
                'department_id' => 44,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Environmental Impact Assessment',
                'code' => 'PGD-EIA',
            ],

            [
                'department_id' => 44,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Geographic Information System',
                'code' => 'PGD-GIS',
            ],

            [
                'department_id' => 44,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Environmental Impact Assessment',
                'code' => 'MSc-EIA',
            ],

            [
                'department_id' => 44,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Geography',
                'code' => 'MSc-GEO',
            ],

            [
                'department_id' => 44,
                'award_type_id' => 6,
                'application_form_id' => 1,
                'name' => 'MPhil Geography',
                'code' => 'MPhil-GEO',
            ],

            [
                'department_id' => 44,
                'award_type_id' => 7,
                'application_form_id' => 1,
                'name' => 'PhD Geography',
                'code' => 'PhD-GEO',
            ],


            [
                'department_id' => 45,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Geophysics',
                'code' => 'B.Sc.-GPY',
            ],

            [
                'department_id' => 46,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Geology',
                'code' => 'B.Sc.-GLY',
            ],

            [
                'department_id' => 47,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Environmental Standards',
                'code' => 'B.Sc.-EVS',
            ],

            [
                'department_id' => 48,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Computer Science',
                'code' => 'B.Sc.-CSC',
            ],

            [
                'department_id' => 48,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Computer Science',
                'code' => 'PGD-CSC',
            ],

            [
                'department_id' => 48,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Management Information System',
                'code' => 'PGD-MIS',
            ],

            [
                'department_id' => 48,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Web and Mobile Technologies',
                'code' => 'PGD-WMT',
            ],

            [
                'department_id' => 48,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Software Engineering and Project Management',
                'code' => 'PGD-SEPM',
            ],

            [
                'department_id' => 48,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Computer Science',
                'code' => 'MSc-CSC',
            ],

            [
                'department_id' => 48,
                'award_type_id' => 7,
                'application_form_id' => 1,
                'name' => 'PhD Computer Science',
                'code' => 'PhD-CSC',
            ],

            [
                'department_id' => 49,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Cyber Security',
                'code' => 'B.Sc.-CBY',
            ],

            [
                'department_id' => 50,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Data Science',
                'code' => 'B.Sc.-DSC',
            ],

            [
                'department_id' => 51,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Software Engineering',
                'code' => 'B.Sc.-SWE',
            ],

            [
                'department_id' => 52,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Information System',
                'code' => 'B.Sc.-INS',
            ],

            [
                'department_id' => 53,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Computer Engineering',
                'code' => 'B.Eng.-CEG',
            ],

            [
                'department_id' => 54,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Mechanical Engineering',
                'code' => 'B.Eng.-MCE',
            ],

            [
                'department_id' => 55,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Electrical and Electronics Engineering',
                'code' => 'B.Eng.-EEE',
            ],

            [
                'department_id' => 56,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Architecture',
                'code' => 'B.Sc.-ARC',
            ],

            [
                'department_id' => 56,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Architecture',
                'code' => 'MSc.-ARC',
            ],

            [
                'department_id' => 57,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Agriculture',
                'code' => 'B.Eng.-AGR',
            ],

            [
                'department_id' => 57,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Animal Science',
                'code' => 'PGD-ASC',
            ],

            [
                'department_id' => 57,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Crop Science',
                'code' => 'PGD-CPS',
            ],

            [
                'department_id' => 57,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Agricultural Extension and Rural Development',
                'code' => 'PGD-AERD',
            ],

            [
                'department_id' => 57,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Farm Management and Production Economics',
                'code' => 'PGD-FMPE',
            ],

            [
                'department_id' => 57,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Agricultural Extension and Rural Development',
                'code' => 'MSC-AERD',
            ],

            [
                'department_id' => 57,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Crop Science',
                'code' => 'MSC-CPS',
            ],

            [
                'department_id' => 57,
                'award_type_id' => 7,
                'application_form_id' => 1,
                'name' => 'PhD Agricultural Economics',
                'code' => 'PhD-AGE',
            ],

            [
                'department_id' => 57,
                'award_type_id' => 7,
                'application_form_id' => 1,
                'name' => 'PhD Crop Science',
                'code' => 'PhD-CPS',
            ],

            [
                'department_id' => 57,
                'award_type_id' => 7,
                'application_form_id' => 1,
                'name' => 'PhD Agricultural Extension and Rural Development',
                'code' => 'PhD-AERD',
            ],

            [
                'department_id' => 58,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Environmental Management',
                'code' => 'B.Sc.-ENV',
            ],

            [
                'department_id' => 58,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Environmental Management',
                'code' => 'MSc-ENV',
            ],

            [
                'department_id' => 58,
                'award_type_id' => 7,
                'application_form_id' => 1,
                'name' => 'PhD Environmental Management',
                'code' => 'PhD-ENV',
            ],

            [
                'department_id' => 59,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Estate Management',
                'code' => 'B.Sc.-EMG',
            ],

            [
                'department_id' => 59,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Estate Management',
                'code' => 'MSc-EMG',
            ],

            [
                'department_id' => 60,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Building',
                'code' => 'B.Sc.-BLD',
            ],

            [
                'department_id' => 61,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Quantity Surveying',
                'code' => 'B.Sc.-QTS',
            ],

            [
                'department_id' => 62,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Medicine and Surgery',
                'code' => 'B.Sc.-MBBS',
            ],

            [
                'department_id' => 62,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Human Anatomy',
                'code' => 'PGD-ATY',
            ],

            [
                'department_id' => 62,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Human Physiology',
                'code' => 'PGD-PGY',
            ],

            [
                'department_id' => 62,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Human Anatomy',
                'code' => 'MSc-ATY',
            ],

            [
                'department_id' => 62,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Human Physiology',
                'code' => 'MSc-PGY',
            ],

            [
                'department_id' => 63,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Pharmacy',
                'code' => 'D.Pharmacy',
            ],

            [
                'department_id' => 63,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Pharmaceutical Microbiology',
                'code' => 'PGD-PMM',
            ],

            [
                'department_id' => 63,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD Pharmacology and Toxicology',
                'code' => 'PGD-PMT',
            ],

            [
                'department_id' => 63,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Pharmaceutical Microbiology',
                'code' => 'MSc-PMM',
            ],

            [
                'department_id' => 63,
                'award_type_id' => 5,
                'application_form_id' => 1,
                'name' => 'MSc Pharmacology and Toxicology',
                'code' => 'MSc-PMT',
            ],

            [
                'department_id' => 64,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Physiotherapy',
                'code' => 'Doctor of - PSY',
            ],

            [
                'department_id' => 65,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Medical Laboratory Science',
                'code' => 'B.Sc.-MLS',
            ],

            [
                'department_id' => 66,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Nursing',
                'code' => 'B.Sc.-NSG',
            ],

            [
                'department_id' => 67,
                'award_type_id' => 3,
                'application_form_id' => 2,
                'name' => 'Radiography',
                'code' => 'B.Sc.-RAD',
            ],

            [
                'department_id' => 68,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Information Technology',
                'code' => 'INT',
            ],

            [
                'department_id' => 68,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Software Engineering',
                'code' => 'CSE',
            ],

            [
                'department_id' => 68,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Networking and System Security',
                'code' => 'NSS',
            ],

            [
                'department_id' => 68,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Data Science',
                'code' => 'DTS',
            ],

            [
                'department_id' => 68,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Broadcast Journalism',
                'code' => 'BCJ',
            ],

            [
                'department_id' => 68,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Library and Information Science',
                'code' => 'LIS',
            ],

            [
                'department_id' => 69,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Chemistry with Biofuel',
                'code' => 'CHB',
            ],

            [
                'department_id' => 69,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Energy Health Technology',
                'code' => 'EHT',
            ],

            [
                'department_id' => 69,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Environmental Biology',
                'code' => 'EVB',
            ],

            [
                'department_id' => 69,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Paramedics and Disaster Management Science',
                'code' => 'PDMS',
            ],

            [
                'department_id' => 69,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Science Laboratory Technology',
                'code' => 'SLT',
            ],

            [
                'department_id' => 69,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Renewable Energy and Solar Maintenance',
                'code' => 'RESM',
            ],

            [
                'department_id' => 70,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Crime Management',
                'code' => 'CMT',
            ],

            [
                'department_id' => 71,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Accounting',
                'code' => 'ACC',
            ],

            [
                'department_id' => 71,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Business Management',
                'code' => 'BUM',
            ],

            [
                'department_id' => 71,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Leadership Management',
                'code' => 'LIM',
            ],

            [
                'department_id' => 71,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Policy and Governance',
                'code' => 'PYG',
            ],

            [
                'department_id' => 71,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Procurement Management',
                'code' => 'PRM',
            ],

            [
                'department_id' => 71,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Public Administration',
                'code' => 'PAD',
            ],

            [
                'department_id' => 71,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD in Public Administration',
                'code' => 'PGD-PAD',
            ],

            [
                'department_id' => 71,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD in Public Management',
                'code' => 'PGD-PMT',
            ],

            [
                'department_id' => 71,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD in Policy and Governance',
                'code' => 'PGD-PYG',
            ],

            [
                'department_id' => 71,
                'award_type_id' => 4,
                'application_form_id' => 1,
                'name' => 'PGD in Leadership and Development Studies',
                'code' => 'PGD-LDS',
            ],

            [
                'department_id' => 72,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Physic Education',
                'code' => 'PHEDU',
            ],

            [
                'department_id' => 72,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Chemistry Education',
                'code' => 'CHEDU',
            ],
            [
                'department_id' => 72,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Mathematics Education',
                'code' => 'MHEDU',
            ],

            [
                'department_id' => 72,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Computer Science Education',
                'code' => 'CSEDU',
            ],

            [
                'department_id' => 72,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Integrated Science Education',
                'code' => 'ISEDU',
            ],

            [
                'department_id' => 72,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Biology Education',
                'code' => 'BIOEDU',
            ],

            [
                'department_id' => 72,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Geography Education',
                'code' => 'GOEDU',
            ],

            [
                'department_id' => 72,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Agriculture Education',
                'code' => 'AGEDU',
            ],

            [
                'department_id' => 72,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'English Education',
                'code' => 'EGEDU',
            ],

            [
                'department_id' => 72,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Arabic Education',
                'code' => 'AREDU',
            ],

            [
                'department_id' => 72,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'History Education',
                'code' => 'HIEDU',
            ],

            [
                'department_id' => 72,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'French Education',
                'code' => 'FREDU',
            ],

            [
                'department_id' => 72,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Hausa Education',
                'code' => 'HAEDU',
            ],

            [
                'department_id' => 72,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Islamic Studies Education',
                'code' => 'ISEDU',
            ],

            [
                'department_id' => 72,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'CRS Education',
                'code' => 'CRSEDU',
            ],

            [
                'department_id' => 72,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Political Science Education',
                'code' => 'PLEDU',
            ],

            [
                'department_id' => 72,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Mass Communication Education',
                'code' => 'MCEDU',
            ],

            [
                'department_id' => 72,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Business Education',
                'code' => 'BSEDU',
            ],

            [
                'department_id' => 72,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Economics Education',
                'code' => 'ECEDU',
            ],

            [
                'department_id' => 72,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Information Science Education',
                'code' => 'ISEDU',
            ],

            [
                'department_id' => 72,
                'award_type_id' => 2,
                'application_form_id' => 4,
                'name' => 'Guidance and Counselling Education',
                'code' => 'GSEDU',
            ],

            [
                'department_id' => 73,
                'award_type_id' => 1,
                'application_form_id' => 4,
                'name' => 'Principles of Techniques of International Language',
                'code' => 'PTIL',
            ],

            [
                'department_id' => 73,
                'award_type_id' => 1,
                'application_form_id' => 4,
                'name' => 'Translation',
                'code' => 'TRANS',
            ],

            [
                'department_id' => 73,
                'award_type_id' => 1,
                'application_form_id' => 4,
                'name' => 'Principles and Practice of Religious Preaching',
                'code' => 'PPRP',
            ],

            [
                'department_id' => 74,
                'award_type_id' => 1,
                'application_form_id' => 5,
                'name' => 'Remedial',
                'code' => 'REMS',
            ],

            [
                'department_id' => 74,
                'award_type_id' => 1,
                'application_form_id' => 5,
                'name' => 'Basic Studies',
                'code' => 'BSS',
            ],

            [
                'department_id' => 74,
                'award_type_id' => 1,
                'application_form_id' => 5,
                'name' => 'IJMB',
                'code' => 'IJMB',
            ],

            [
                'department_id' => 75,
                'award_type_id' => 2,
                'application_form_id' => 3,
                'name' => 'B.A Arabic',
                'code' => 'BA-ARB',
            ],

            [
                'department_id' => 75,
                'award_type_id' => 2,
                'application_form_id' => 3,
                'name' => 'B.A English',
                'code' => 'BA-ENG',
            ],

            [
                'department_id' => 75,
                'award_type_id' => 2,
                'application_form_id' => 3,
                'name' => 'B.A Hausa',
                'code' => 'BA-HAU',
            ],

            [
                'department_id' => 75,
                'award_type_id' => 2,
                'application_form_id' => 3,
                'name' => 'B.A Islamic Studies',
                'code' => 'BA-ISL',
            ],

            [
                'department_id' => 76,
                'award_type_id' => 2,
                'application_form_id' => 3,
                'name' => 'B.Sc Accounting',
                'code' => 'BSc-ACC',
            ],

            [
                'department_id' => 76,
                'award_type_id' => 2,
                'application_form_id' => 3,
                'name' => 'B.Sc Business Adminstration',
                'code' => 'BSc-BUS',
            ],

            [
                'department_id' => 77,
                'award_type_id' => 2,
                'application_form_id' => 3,
                'name' => 'B.Sc Computer Science',
                'code' => 'BSc-CSC',
            ],

            [
                'department_id' => 77,
                'award_type_id' => 2,
                'application_form_id' => 3,
                'name' => 'B.Sc Geography',
                'code' => 'BSc-GEO',
            ],

            [
                'department_id' => 78,
                'award_type_id' => 2,
                'application_form_id' => 3,
                'name' => 'B.Sc Criminology and Security Studies',
                'code' => 'BSc-CSS',
            ],

            [
                'department_id' => 78,
                'award_type_id' => 2,
                'application_form_id' => 3,
                'name' => 'B.Sc Economics',
                'code' => 'BSc-ECN',
            ],

            [
                'department_id' => 78,
                'award_type_id' => 2,
                'application_form_id' => 3,
                'name' => 'B.Sc International Relations',
                'code' => 'BSc-IRL',
            ],

            [
                'department_id' => 78,
                'award_type_id' => 2,
                'application_form_id' => 3,
                'name' => 'B.Sc Political Science',
                'code' => 'BSc-POL',
            ],

            [
                'department_id' => 78,
                'award_type_id' => 2,
                'application_form_id' => 3,
                'name' => 'B.Sc Sociology',
                'code' => 'BSc-SOC',
            ],

        ];

        foreach ($programmes as $programme) {
            Programme::create($programme);
        }
    }
}
