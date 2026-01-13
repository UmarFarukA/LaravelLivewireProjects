<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdmissionController extends Controller
{

    public function index()
    {
        return Inertia::render('Admissions/Index', [
            'applications' => Applications::when(request()->search, function ($query, $search) {
                $query->where('first_name', 'like', '%' . $search . '%')
                      ->orWhere('last_name', 'like', '%' . $search . '%')
                      ->orWhere('parent_name', 'like', '%' . $search . '%');
            })->paginate(4)
                ->withQueryString()
                ->through(fn($application) => [
                    'id' => $application->id,
                    'first_name' => $application->first_name,
                    'last_name' => $application->last_name,
                    'Age' => (now()->year - date('Y', strtotime($application->dob))),
                    'class_applied' => ($application->classroom) ? $application->classroom->name : 'N/A',
                    'created_at' => $application->created_at->format('d M Y'),
                ]),
            'searchTerm' => request()->search ?? ''
        ]);  //$application->classroom_id
    }


    public function view(Applications $application)
    {
        return Inertia::render('Admissions/View', [
            'application' => $application,
        ]);
    }
}
