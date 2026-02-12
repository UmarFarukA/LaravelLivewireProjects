<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            [
                'faculty_id' => 1,
                'name' => 'Banking and Finance',
                'code' => 'BNF'
            ],

            [
                'faculty_id' => 1,
                'name' => 'Business Administration and Entrepreneurship',
                'code' => 'BAE'
            ],

            [
                'faculty_id' => 1,
                'name' => 'Marketing',
                'code' => 'MKT'
            ],

            [
                'faculty_id' => 1,
                'name' => 'Public Administration',
                'code' => 'PAD'
            ],

            [
                'faculty_id' => 1,
                'name' => 'Accounting',
                'code' => 'ACC'
            ],

            [
                'faculty_id' => 1,
                'name' => 'Procurement and Supply Chain Management',
                'code' => 'PSM'
            ],

            [
                'faculty_id' => 1,
                'name' => 'Industrial Relation and Personnel Management',
                'code' => 'IRP'
            ],

            [
                'faculty_id' => 2,
                'name' => 'Socialogy',
                'code' => 'SOC'
            ],

            [
                'faculty_id' => 2,
                'name' => 'Criminology and Security Studies',
                'code' => 'CSS'
            ],

            [
                'faculty_id' => 2,
                'name' => 'Economics',
                'code' => 'ECN'
            ],

            [
                'faculty_id' => 2,
                'name' => 'Political Science and Internatioal Relations',
                'code' => 'PIR'
            ],

            [
                'faculty_id' => 2,
                'name' => 'Library and Information Science',
                'code' => 'LIS'
            ],

            [
                'faculty_id' => 3,
                'name' => 'Mass Communication',
                'code' => 'MCN'
            ],

            [
                'faculty_id' => 3,
                'name' => 'Journalism and Media Studies',
                'code' => 'JMS'
            ],

            [
                'faculty_id' => 3,
                'name' => 'Broadcasting',
                'code' => 'BCG'
            ],

            [
                'faculty_id' => 4,
                'name' => 'Theatre Arts',
                'code' => 'THA'
            ],

            [
                'faculty_id' => 4,
                'name' => 'Arabic',
                'code' => 'ARB'
            ],

            [
                'faculty_id' => 4,
                'name' => 'History and Strategic Studies',
                'code' => 'HSS'
            ],

            [
                'faculty_id' => 4,
                'name' => 'Islamic Studies',
                'code' => 'ISL'
            ],

            [
                'faculty_id' => 4,
                'name' => 'Christian Religios Studies',
                'code' => 'CRS'
            ],

            [
                'faculty_id' => 4,
                'name' => 'English',
                'code' => 'ENG'
            ],

            [
                'faculty_id' => 4,
                'name' => 'Linguistics',
                'code' => 'LIN'
            ],

            [
                'faculty_id' => 4,
                'name' => 'French',
                'code' => 'FRN'
            ],

            [
                'faculty_id' => 4,
                'name' => 'Hausa',
                'code' => 'HAU'
            ],

            [
                'faculty_id' => 5,
                'name' => 'Education and Arabic',
                'code' => 'EDARB'
            ],

            [
                'faculty_id' => 5,
                'name' => 'Education and Biology',
                'code' => 'EDBIO'
            ],

            [
                'faculty_id' => 5,
                'name' => 'Education and Chemistry',
                'code' => 'EDCHM'
            ],

            [
                'faculty_id' => 5,
                'name' => 'Education and Christian Religious Studies',
                'code' => 'EDCRS'
            ],

            [
                'faculty_id' => 5,
                'name' => 'Education and Economics',
                'code' => 'EDECN'
            ],

            [
                'faculty_id' => 5,
                'name' => 'Education and English Language',
                'code' => 'EDENG'
            ],

            [
                'faculty_id' => 5,
                'name' => 'Education and Geography',
                'code' => 'EDGEO'
            ],

            [
                'faculty_id' => 5,
                'name' => 'Education and Hausa',
                'code' => 'EDHAU'
            ],

            [
                'faculty_id' => 5,
                'name' => 'Education and Islamic Studies',
                'code' => 'EDISS'
            ],

            [
                'faculty_id' => 5,
                'name' => 'Education and Mathematics',
                'code' => 'EDMTH'
            ],

            [
                'faculty_id' => 5,
                'name' => 'Education and Physics',
                'code' => 'EDPHY'
            ],

            [
                'faculty_id' => 6,
                'name' => 'Biochemistry',
                'code' => 'BCH'
            ],

            [
                'faculty_id' => 6,
                'name' => 'Biotechnology',
                'code' => 'BTE'
            ],

            [
                'faculty_id' => 6,
                'name' => 'Biology',
                'code' => 'BIO'
            ],

            [
                'faculty_id' => 6,
                'name' => 'Microbiology',
                'code' => 'MCB'
            ],

            [
                'faculty_id' => 7,
                'name' => 'Pure and Applied Chemistry',
                'code' => 'PAC'
            ],

            [
                'faculty_id' => 7,
                'name' => 'Physics',
                'code' => 'PHY'
            ],

            [
                'faculty_id' => 7,
                'name' => 'Mathematics',
                'code' => 'MTH'
            ],

            [
                'faculty_id' => 7,
                'name' => 'Statistics',
                'code' => 'STA'
            ],

            [
                'faculty_id' => 8,
                'name' => 'Geography and Sustainability Studies',
                'code' => 'GSS'
            ],

            [
                'faculty_id' => 8,
                'name' => 'Geophysics',
                'code' => 'GPY'
            ],

            [
                'faculty_id' => 8,
                'name' => 'Geology',
                'code' => 'GLY'
            ],

            [
                'faculty_id' => 8,
                'name' => 'Environmental Standards',
                'code' => 'EVS'
            ],

            [
                'faculty_id' => 9,
                'name' => 'Computer Science',
                'code' => 'CSC'
            ],

            [
                'faculty_id' => 9,
                'name' => 'Cyber Security',
                'code' => 'CBY'
            ],

            [
                'faculty_id' => 9,
                'name' => 'Data Science',
                'code' => 'DSC'
            ],

            [
                'faculty_id' => 9,
                'name' => 'Software Engineering',
                'code' => 'SWE'
            ],

            [
                'faculty_id' => 9,
                'name' => 'Information System',
                'code' => 'INS'
            ],

            [
                'faculty_id' => 10,
                'name' => 'Computer Engineering',
                'code' => 'CEG'
            ],

            [
                'faculty_id' => 10,
                'name' => 'Mechanical Engineering',
                'code' => 'MCE'
            ],

            [
                'faculty_id' => 10,
                'name' => 'Electrical and Electronics Engineering',
                'code' => 'EEE'
            ],

            [
                'faculty_id' => 11,
                'name' => 'Architecture',
                'code' => 'ARC'
            ],

            [
                'faculty_id' => 12,
                'name' => 'Agriculture',
                'code' => 'AGR'
            ],

            [
                'faculty_id' => 13,
                'name' => 'Environmental Management',
                'code' => 'ENV'
            ],

            [
                'faculty_id' => 13,
                'name' => 'Estate Management',
                'code' => 'EMG'
            ],

            [
                'faculty_id' => 13,
                'name' => 'Building',
                'code' => 'BLD'
            ],

            [
                'faculty_id' => 13,
                'name' => 'Quantity Surveying',
                'code' => 'QTS'
            ],

            [
                'faculty_id' => 13,
                'name' => 'Medicine',
                'code' => 'MED'
            ],

            [
                'faculty_id' => 14,
                'name' => 'Pharmacy',
                'code' => 'PHM'
            ],

            [
                'faculty_id' => 15,
                'name' => 'Physiotherapy',
                'code' => 'PSY'
            ],

            [
                'faculty_id' => 15,
                'name' => 'Medical Laboratory Science',
                'code' => 'MLS'
            ],

            [
                'faculty_id' => 15,
                'name' => 'Nursing',
                'code' => 'NSG'
            ],

            [
                'faculty_id' => 15,
                'name' => 'Radiography',
                'code' => 'RAD'
            ],
            [
                'faculty_id' => 16,
                'name' => 'Centre for Information and Communication Technology',
                'code' => 'CICT'
            ],

            [
                'faculty_id' => 16,
                'name' => 'Centre for Energy, Environment, and Strategy Research',
                'code' => 'CEESR'
            ],

            [
                'faculty_id' => 16,
                'name' => 'Centre for Gender Studies',
                'code' => 'CGS'
            ],

            [
                'faculty_id' => 16,
                'name' => 'Centre for Procurement and Supply Chain Management',
                'code' => 'CPSCM'
            ],

            [
                'faculty_id' => 17,
                'name' => 'Centre for Procurement and Supply Chain Management',
                'code' => 'CPSCM'
            ]
        ];

        foreach($departments as $department) {
            Department::updateOrCreate(
                ['code' => $department['code']],
                [
                    'faculty_id' => $department['faculty_id'],
                    'name' => $department['name'],
                    'code' => $department['code']
                ]
            );
        }
    }
}
