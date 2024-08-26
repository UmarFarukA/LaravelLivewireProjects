<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    //
    public function create(): View
    {
        return view("auth.create");
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!Auth::attempt([$attributes])) {
            throw ValidationException::withMessages(
                ["email" => "Invalid login credentials"]
            );
        }

        $request->session()->regenerate();

        return redirect(route('home'))->with("success", "login successfully");
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->sessioin()->invalidate();

        $request->session()->regenerate();

        return redirect(route('home'))->with("success", "successfully logout");
    }
}
