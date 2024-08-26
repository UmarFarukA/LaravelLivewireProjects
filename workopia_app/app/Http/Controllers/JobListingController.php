<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;
use Illuminate\View\View;

class JobListingController extends Controller
{
    public function index()
    {
        $jobs = JobListing::latest()->paginate(9);

        return view("index", ["jobs" => $jobs]);
    }

    public function create(): View
    {
        return view("listings.create");
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            "title" => 'required|string|min:2',
            "description" => 'required|string|min:5',
            "salary" => 'required|string|min:3|max:12',
            "requirements" => "required|string|min:12",
            "benefits" => "required|string|min:12",
            "address" => "required|string",
            "city" => "required|string",
            "state" => "required|string",
            "phone" => "required|string",
            "email" => "required|email"
        ]);

        $attributes['employer_id'] = 30;

        JobListing::create($attributes);

        return redirect(route('home'))->with("success", "New Job created successfully");
    }

    public function show(JobListing $job)
    {
        return view("listings.show", ["job" => $job]);
    }

    public function edit(JobListing $job)
    {
        return view("listings.edit", ["job" => $job]);
    }

    public function update() {}
}
