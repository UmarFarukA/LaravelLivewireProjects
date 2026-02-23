<?php

namespace App\Services;

use App\Models\Application;
use App\Models\AvailableProgramme;

class ApplicationService
{
    public function startApplication(AvailableProgramme $programme)
    {
        $applicant = auth('applicant')->user();

        $application = Application::where([
            'applicant_id' => $applicant->id,
            'available_programme_id' => $programme->id,
        ])->first();

        if ($application) {
            return redirect()->route(
                'applicant.dashboard',
                $application->id
                // $application
            )->with('info', 'You already started this application.');
        }

        $application = Application::create([
            'applicant_id' => $applicant->id,
            'available_programme_id' => $programme->id,
            'status' => 'draft',
        ]);

        return redirect()->route(
            'applicant.dashboard',
            $application->id
        );
    }
}
