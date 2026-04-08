<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
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
                'id' => $application->applicant->id,
                'othernames' => $application->applicant->othernames,
                'surname' => $application->applicant->surname,
                'gender' => $application->applicant->gender,
                'dob' => $application->applicant->dob,
                'phone' => $application->applicant->phone,
                'address' => $application->applicant->address,
                'country' => $application->applicant->country,
                'state' => $application->applicant->state,
                'lga' => $application->applicant->lga,
            ],
            'countries' => Nationality::all(),

        ]);
    }

    public function store_biodata(Request $request, Applicant $applicant)
    {
        $data = $request->validate([
            'gender' => 'required',
            'dob' => 'required|date',
            'phone' => 'required|string|min:11|max:15',
            'address' => 'required|string|max:256',
            'country_id' => 'required',
            'state_id' => 'required',
            'lga_id' => 'required',
            'picture' => 'required|file|max:1024'
        ]);

        if($request->hasFile('picture')) {
            $path = $request->file('picture')->store('pictures', 'public');
            $data['picture'] = $path;
        }

        $applicant->update($data);

        return redirect()->route('applicant.dashboard');

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
