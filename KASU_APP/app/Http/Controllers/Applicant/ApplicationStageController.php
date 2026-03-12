<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ApplicationStageController extends Controller
{
    public function payment(Application $application)
    {
        return Inertia::render('Applicant/Application/Payment', compact('application'));
    }

    public function biodata(Application $application)
    {
        return Inertia::render('Applicant/Application/BioData', compact('application'));
    }

    public function olevel(Application $application)
    {
        return Inertia::render('Applicant/Application/OLevel', compact('application'));
    }

    public function alevel(Application $application)
    {
        return Inertia::render('Applicant/Application/ALevel', compact('application'));
    }

    public function guardian(Application $application)
    {
        return Inertia::render('Applicant/Application/Guardian', compact('application'));
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
