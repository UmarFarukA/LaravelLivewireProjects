<?php

namespace App\Services;

use App\Models\Application;
use App\Models\AvailableProgramme;

class ApplicationServices
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
            'applicant_id' => intval($applicant->id),
            'available_programme_id' => intval($programme->id),
            'application_form_id' => intval($programme->application_form_id),
            'academic_session' => $programme->academic_session,
            'status' => 'draft',
        ]);

        return redirect()->route(
            'applicant.dashboard',
            $application->id
        );
    }
}
