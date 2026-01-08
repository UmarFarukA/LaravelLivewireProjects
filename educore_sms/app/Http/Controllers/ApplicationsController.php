<?php

namespace App\Http\Controllers;

use App\Models\Applications;
use App\Models\ClassRooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

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

        return redirect()->route('login')->with('success', 'Application submitted successfully.');
    }
}
