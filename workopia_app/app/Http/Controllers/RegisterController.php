<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function create(): View
    {
        // $employers = Employer::get();["employers" => $employers]
        return view(
            "register.create"
        );
    }

    public function store(Request $request): RedirectResponse
    {
        $attributes = $request->validate([
            "name" => "required|string|min:2",
            'email' => "required|email|unique",
            'city' => "required|string",
            'state' => "required|string",
            'password' => "required|string|password_confirmation",
        ]);

        User::create($attributes);

        return redirect(route("login"))->with("success", "New user created successfully");
    }
}