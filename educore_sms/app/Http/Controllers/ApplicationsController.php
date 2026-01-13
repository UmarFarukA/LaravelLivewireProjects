<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use App\Models\ClassRooms;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use InertiaUI\Modal\Modal;


class ApplicationsController extends Controller
{

    public function apply()
    {
        return Inertia::render('Applications/Apply', [
            "classrooms" => ClassRooms::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'previous_school' => 'required|string|max:255',
            'gender' => 'required|integer|in:1,2',
            'parent_name' => 'required|string|max:255',
            'parent_phone' => 'required|string|max:20',
            'email' => 'nullable|email',
            'address' => 'required|string|max:500',
            'classroom_id' => 'required|integer|exists:class_rooms,id',
        ]);

        $validated['school_id'] = 1;

        // $validated['school_id'] = auth()->user()->school_id;

        Applications::create($validated);

        return Inertia::flash('message', 'Application submitted successfully.')->back();
    }

    // public function admitForm(Applications $application)
    // {
    //     return Inertia::modal('Admissions/AdmitStudentModal', [
    //         'application' => $application,
    //     ])->baseRoute('admissions.index');
    // }

    // public function manage(Request $request, Applications $application)
    // {
    //     $data = $request->validate([
    //         'admission_number' => 'required|unique:students,admission_number',
    //         'class_id' => 'required|exists:classes,id',
    //     ]);

    //     Student::create([
    //         'school_id' => 1,
    //         'class_id' => $data['class_id'],
    //         'admission_number' => $data['admission_number'],
    //         'first_name' => $application->first_name,
    //         'last_name' => $application->last_name,
    //         'gender' => $application->gender,
    //         'dob' => $application->dob,
    //     ]);

    //     $application->update(['status' => 'admitted']);

    //     return redirect()->route('admissions.index')
    //         ->with('success', 'Student admitted successfully.');
    // }
}
