<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use App\Models\Student;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdmissionController extends Controller
{

    public function index()
    {
        return Inertia::render('Admissions/Index', [
            'applications' => Applications::where('status', '=', 2)->when(request()->search, function ($query, $search) {
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
        ]);
    }


    public function view(Applications $application)
    {
        return Inertia::render('Admissions/View', [
            'application' => [
                'id' => $application->id,
                'first_name' => $application->first_name,
                'last_name' => $application->last_name,
                'age' => (now()->year - date('Y', strtotime($application->dob))),
                'class_applied' => ($application->classroom) ? $application->classroom->name : 'N/A',
            ],
        ]);
    }

    public function update(Applications $application, Request $request)
    {
        $validated = $request->validate([
            'status' => 'required|in:0,1,2', // 0: Rejected, 1: Accepted, 2: Pending
        ]);

        $app = $application::find($application->id);
        $app->status = $validated['status'];

         $app->save();

        if ($validated['status'] == 1) {
            // If accepted, create a new student record
            Student::create([
                // 'school_id' => $application->school_id,
                'schoold_id' => 1, // Temporary hardcoded school_id
                'applicant_id' => $application->id,
                'admission_number' => 'ADM' . str_pad($application->id, 5, '0', STR_PAD_LEFT),
                'current_class_id' => $application->classroom_id,
                'status' => $validated['status'],
            ]);

            return redirect()->route('admissions.index')->with('success', 'Application status updated successfully.');
        }

        return redirect()->route('admissions.index'); //->with('success', 'Application status updated successfully.');
    }
}
