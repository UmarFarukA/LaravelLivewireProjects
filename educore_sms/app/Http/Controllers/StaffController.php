<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class StaffController extends Controller
{
    public function index(Request $request)
    {

        return Inertia::render('Staff/Index', [
            'users' => User::where('role', '=', 3)
                ->orderBy('name', 'asc')
                ->when($request->search, function ($query, $search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%')
                    ->orWhere('phone', 'like', '%' . $search . '%');
            })->paginate(2)
                ->withQueryString()
                ->through(fn($user) => [
                'id' => $user->id,
                'name' => $user->name,
                'avatar' => $user->avatar,
                'status' => $user->is_active,
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
}
