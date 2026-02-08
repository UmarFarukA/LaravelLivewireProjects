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
            'othernames' => 'required|string|max:255|min:2',
            'surname' => 'required|string|max:255|min:2',
            'email' => 'required|string|email|max:255|unique:applicants,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $applicant = Applicant::create($fields);

        Auth::guard('applicant')->login($applicant);

        //event(new Registered($applicant));

        $applicant->sendEmailVerificationNotification();


        return redirect()->route('verification.notice');
    }
}
