<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
                'stages' => fn($q) => $q->orderBy('order')
            ])
            ->latest()
            ->get();

        return Inertia::render('Layouts/DashboardHome', [
            'applicant' => $applicant,
            'applications' => $applications
        ]);
    }


    public function show(Application $application)
    {
        // $this->authorize('view', $application);

        $application->load([
            'programme',
            'form',
            'stages' => fn($q) => $q->orderBy('order'),
        ]);

        $stages = $application->form->stages->map(function ($stage) use ($application) {
            $pivot = $application->stages->firstWhere('id', $stage->id)?->pivot;

            return [
                'id' => $stage->id,
                'name' => $stage->name,
                'slug' => Str::slug($stage->name),
                'is_completed' => $pivot?->is_completed ?? false,
            ];
        });

        return Inertia::render('Applicant/ApplicationLayout', [
            'application' => [
                'id' => $application->id,
                'programme' => $application->programme->name,
                'status' => $application->status,
            ],
            'stages' => $stages,
        ]);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('applicant')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
