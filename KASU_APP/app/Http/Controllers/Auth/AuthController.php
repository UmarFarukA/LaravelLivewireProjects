<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Pest\Support\Str;

class AuthController extends Controller
{

    public function create()
    {
        return Inertia::render('Auth/Staff/Login');
    }

    public function store(Request $request)
    {
        // Registration logic for staff can be implemented here
        $fields = $request->validate([
            'name' => 'required|string|max:255|min:2',
            'staff_number' => 'required|string|unique:users,staff_number',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $fields['staff_number'] = Str::lower($fields['staff_number']);
        $fields['email'] = Str::lower($fields['email']);


        User::create($fields);

        return redirect()->route('home');
    }

    public function authenticate(Request $request)
    {
        $fields = $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        $login = $fields['login'];

        // Determine if input is email or staff number
        $field = filter_var($login, FILTER_VALIDATE_EMAIL)
            ? 'email'
            : 'staff_number';

        if (Auth::attempt([$field => $login, 'password' => $fields['password']])) {
            $request->session()->regenerate();

            return redirect()->intended(route('home'));
        }

        return back()->withErrors([
            'login' => 'Invalid credentials.',
        ]);
    }

}
