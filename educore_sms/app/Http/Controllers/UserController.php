<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserController extends Controller
{
    //
    public function index(Request $request)
    {
        return Inertia::render('Users/Index', [
            'users' => User::when($request->search, function ($query, $search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%')
                    ->orWhere('phone', 'like', '%' . $search . '%');
            })->paginate(2)
                ->withQueryString()
                ->through(fn($user) => [
                'id' => $user->id,
                'name' => $user->name,
                'avatar' => $user->avatar,
                'status' => $user->status,
                'role' => $user->role,
                'created_at' => $user->created_at->format('d M Y'),
                'can' => [
                    // 'edit' => Auth::user()->can('update', $user),
                    // 'delete' => Auth::user()->can('delete', $user),
                    'create' => Auth::user()->can('create', $user)
                ],
            ]),
            'searchTerm' => $request->search ?? ''
        ]);
    }

    public function create()
    {
        return Inertia::render('Users/Create');
    }

    public function store(Request $request)
    {
         $validated = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:6|confirmed',
            'phone' => 'required|string|max:20',
            'avatar' => 'nullable|file|max:1024', // max 1MB
            'status' => 'nullable|boolean',
        ]);

        if($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatars', 'public');
            $validated['avatar'] = $path;
        }

        User::create($validated);

        return redirect()->route('users.index')->with('success', 'User created successfully!');
    }
}
