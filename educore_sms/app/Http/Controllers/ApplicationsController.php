<?php

namespace App\Http\Controllers;

use App\Models\applications;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ApplicationsController extends Controller
{

    public function apply()
    {
        return Inertia::render('Applications/Apply');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'previous_school' => 'required|string|max:255',
            'gender' => 'required|in:male,female',
            'parent_name' => 'required|string|max:255',
            'parent_phone' => 'required|string|max:20',
            'parent_email' => 'nullable|email',
            'classroom_id' => 'required|string|max:255',
        ]);

        applications::create($validated);

        return redirect()->route('login')->with('success', 'Application submitted successfully.');
    }
}
