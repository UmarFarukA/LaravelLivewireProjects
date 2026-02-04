<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Models\Applicant;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class RegisterApplicantController extends Controller
{
    public function create()
    {
        return Inertia::render('Auth/Register');
    }

    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string|max:255|min:2',
            'email' => 'required|string|email|max:255|unique:applicant,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $newApplicant = Applicant::create($fields);

        Auth::guard('applicant')->login($newApplicant);

        event(new Registered($newApplicant));

        return redirect()->route('verification.notice');
    }
}
