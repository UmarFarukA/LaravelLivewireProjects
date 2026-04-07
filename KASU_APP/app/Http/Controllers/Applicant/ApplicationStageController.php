<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Nationality;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;

class ApplicationStageController extends Controller
{

    public function get_stages(Application $application)
    {
        $stages = $application->form
            ->stages()
            ->orderBy('order')
            ->get()
            ->map(function ($stage) use ($application) {

                $status = $application->stages->firstWhere('id', $stage->id);

                return [
                    'id' => $stage->id,
                    'name' => $stage->name,
                    'slug' => Str::slug($stage->name),
                    'is_completed' => $status?->pivot->is_completed ?? false,
                ];
            });
        return $stages;
    }
    public function payment(Application $application)
    {

        return Inertia::render('Applicant/Application/Payment', [
            'application' => $application,
            'stages' => $this->get_stages($application)
        ]);
    }

    public function biodata(Application $application)
    {
        return Inertia::render('Applicant/Application/BioData', [
            'application' => $application,
            'stages' => $this->get_stages($application),
            'applicant' => [
                'othernames' => $application->applicant->othernames,
                'surname' => $application->applicant->surname
            ],
            'countries' => Nationality::all(),

        ]);
    }

    public function olevel(Application $application)
    {
        return Inertia::render('Applicant/Application/OLevel', [
            'application' => $application
        ]);
    }

    public function alevel(Application $application)
    {
        return Inertia::render('Applicant/Application/ALevel', [
            'application' => $application
        ]);
    }

    public function guardian(Application $application)
    {
        return Inertia::render('Applicant/Application/Guardian', [
            'application' => $application
        ]);
    }

    public function referees(Application $application)
    {
        return Inertia::render('Applicant/Application/Referees', compact('application'));
    }

    public function attestation(Application $application)
    {
        return Inertia::render('Applicant/Application/Attestation', compact('application'));
    }
}
