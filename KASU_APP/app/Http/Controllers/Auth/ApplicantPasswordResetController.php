<?php

namespace App\Http\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Applicant;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Inertia\Inertia;
use Illuminate\Support\Str;

class ApplicantPasswordResetController extends Controller
{
    public function create()
    {
        return Inertia::render('Auth/ForgotPassword');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $status = Password::broker('applicants')
            ->sendResetLink($request->only('email'));

        return back()->with('status', __($status));
    }

    public function edit(Request $request, $token = null)
    {
        return Inertia::render('Auth/Applicant/ResetPassword', [
            'token' => $token,
            'email' => $request->email
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8'
        ]);

        $status = Password::broker('applicants')
            ->reset(
                $request->only('email', 'password', 'password_confirmation', 'token'),
                function (Applicant $applicant, $password) {
                    $applicant->forceFill([
                        'password' => Hash::make($password),
                        'remember_token' => Str::random(60),
                    ])->save();
                }
            );

        return $status == Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }


}
