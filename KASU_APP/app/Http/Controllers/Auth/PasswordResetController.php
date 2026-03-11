<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Inertia\Inertia;

class PasswordResetController extends Controller
{
    public function create()
    {
        return Inertia::render('Auth/ForgotPassword');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required','email']
        ]);

        $broker = $this->resolveBroker($request->email);

        $status = Password::broker($broker)
            ->sendResetLink($request->only('email'));

        return back()->with('status', __($status));
    }

    public function edit(Request $request, $token)
    {
        return Inertia::render('Auth/ResetPassword', [
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

        $broker = $this->resolveBroker($request->email);

        $status = Password::broker($broker)->reset(
            $request->only(
                'email',
                'password',
                'password_confirmation',
                'token'
            ),
            function ($user, $password) {

                $user->forceFill([
                    'password' => Hash::make($password),
                    'remember_token' => Str::random(60),
                ])->save();

            }
        );

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')
            : back()->withErrors(['email' => __($status)]);
    }


    protected function resolveBroker($email)
    {
        if (Applicant::where('email', $email)->exists()) {
            return 'applicants';
        }

        if (User::where('email', $email)->exists()) {
            return 'users';
        }

        abort(404, 'User not found');
    }
}
