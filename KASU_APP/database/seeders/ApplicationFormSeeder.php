<?php

namespace Database\Seeders;

use App\Models\ApplicationForm;
use App\Models\ApplicationStage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApplicationFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stages = ApplicationStage::all()->keyBy('slug');

        $forms = [
            [
                'name' => 'Postgraduate Application',
                'slug' => 'postgraduate',
                'description' => 'Postgraduate application form for various postgraduate programmes.',
                'stages' => [
                    'programme-selection',
                    'payment',
                    'bio-data',
                    'referee',
                    'o-level',
                    'a-level',
                    'attestation',
                ],
            ],
            [
                'name' => 'Post-UTME Application',
                'slug' => 'post-utme',
                'description' => 'Post-UTME application form for undergraduate programmes.',
                'stages' => [
                    'programme-selection',
                    'payment',
                    'bio-data',
                    'parent-guardian',
                    'o-level',
                    'attestation',
                ],
            ],
            [
                'name' => 'CCE (Part-Time) Application',
                'slug' => 'cce',
                'description' => 'CCE (Part-Time) application form for various programmes.',
                'stages' => [
                    'programme-selection',
                    'payment',
                    'bio-data',
                    'parent-guardian',
                    'o-level',
                    'attestation',
                ],
            ],
            [
                'name' => 'Diploma Application',
                'slug' => 'diploma',
                'description' => 'Diploma application form for various diploma programmes.',
                'stages' => [
                    'programme-selection',
                    'payment',
                    'bio-data',
                    'o-level',
                    'attestation',
                ],
            ],
            [
                'name' => 'IJMB / Remedial Application',
                'slug' => 'ijmb-remedial',
                'description' => 'CBS application form for IJMB, Basic, and remedial programmes.',
                'stages' => [
                    'programme-selection',
                    'payment',
                    'bio-data',
                    'o-level',
                    'attestation',
                ],
            ],
        ];

        foreach($forms as $formData){
            $form = ApplicationForm::updateOrCreate(
                ['slug' => $formData['slug']],
                [
                    'name' => $formData['name'],
                    'description' => $formData['description']
                ]
            );

            $pivotData = [];

            foreach ($formData['stages'] as $index => $stageSlug) {
                if (! isset($stages[$stageSlug])) {
                    continue;
                }

                $pivotData[$stages[$stageSlug]->id] = [
                    'order' => $index + 1,
                ];
            }

            $form->stages()->sync($pivotData);
        }
    }
}
