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

    public function updateProfileImage(Request $request)
    {
        $user = $request->user();

        $validated = $request->validate([
            'avatar' => 'required|file|max:1024|mimes:jpg,jpeg,png',
        ]);

        dd($validated);

        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatars', 'public');
            $validated['avatar'] = $path;

            $user->update([
                'avatar' => $validated['avatar'],
            ]);

            $user->save();
        }

        return redirect()->route('settings.index'); //->with('success', 'Profile updated successfully.');
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

            // Update password
            $user->update([
                'password' => Hash::make($validated['password']),
            ]);
            return redirect('/dashboard');
        }

        return redirect()->route('settings.index'); //->with('success', 'Password updated successfully.');
    }
}
