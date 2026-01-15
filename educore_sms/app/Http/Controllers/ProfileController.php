<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //
    public function index()
    {
        return Inertia::render('Profile/Settings');
    }

    public function updateContactInfo(Request $request)
    {
        $user = $request->user();

        // dd($user);

        $validated = $request->validate([
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'nullable|string|max:15'
        ]);

        $user->update($validated);

        return redirect()->route('settings.index'); //->with('success', 'Contact information updated successfully.');
    }

    public function updatePassword(Request $request)
    {
        $user = $request->user();

        $validated = $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Check if current password matches
        if (Hash::check($validated['current_password'], $user->password)) {
            return redirect()->route('settings.index');//->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        // Update password
        $user->update([
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('users.destroy'); //->with('success', 'Password updated successfully.');
    }
}
