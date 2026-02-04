<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ApplicantController extends Controller
{
    public function dashboard()
    {
        $applicant = Auth::guard('applicant')->user();

        $applications = $applicant->applications()
            ->with([
                'programme.department.faculty',
                'form',
                'stages' => fn ($q) => $q->orderBy('order')
            ])
            ->latest()
            ->get();

        return Inertia::render('Applicant/Dashboard', [
            'applicant' => $applicant,
            'applications' => $applications
        ]);
    }

    // public function register
}
