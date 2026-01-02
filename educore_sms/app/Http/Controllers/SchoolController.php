<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SchoolController extends Controller
{
    //

     public function index()
    {
        $schools = School::latest()->get();

        return Inertia::render('Schools/Index', [
            'schools' => $schools
        ]);
    }

    public function create()
    {
        return Inertia::render('Schools/Create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:schools|max:255',
            'address' => 'nullable|string|max:500',
            'phone' => 'required|string|max:20',
            'school_logo' => 'nullable|file|max:1024', // max 1MB
            'status' => 'nullable|boolean',
        ]);

        if($request->hasFile('school_logo')) {
            $path = $request->file('school_logo')->store('school_logos', 'public');
            $validated['school_logo'] = $path;
        }

        School::create($validated);

        return redirect()->route('schools.index')->with('success', 'School created successfully!');
    }

    public function edit(School $school)
    {
        return Inertia::render('Schools/Edit', [
            'school' => $school
        ]);
    }

    public function update(School $school, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:schools,email,' . $school->id . '|max:255',
            'address' => 'nullable|string|max:500',
            'phone' => 'required|string|max:15',
            'school_logo' => 'nullable|file|max:10240', // max 1MB
            'status' => 'nullable|boolean',
        ]);

        if($request->hasFile('school_logo')) {
            $path = $request->file('school_logo')->store('school_logos', 'public');
            $validated['school_logo'] = $path;
        }

        $school->update($validated);

        return redirect()->route('schools.index')->with('success', 'School updated successfully!');
    }

    public function destroy(School $school)
    {
        $school->delete();

        return redirect()->route('schools.index')->with('success', 'School deleted successfully!');
    }
}
