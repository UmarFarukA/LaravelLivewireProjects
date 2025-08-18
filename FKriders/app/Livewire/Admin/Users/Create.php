<?php

namespace App\Livewire\Admin\Users;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class Create extends Component
{

    public string $lname = '';

    public string $othernames = '';

    public string $phone = "";

    public int $role_id;

    public string $password = '';

    public string $password_confirmation = '';
    /**
     * Handle creation of user.
     */
    public function store(): void
    {
        $validated = $this->validate([
            'othernames' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            'phone' => ['required', 'string', 'max:11', 'unique:'.User::class],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        if(!$this->role_id) return;

        $validated['role_id'] = $this->role_id;

        User::create($validated);

        session()->flash('success','New user created successfully');

        $this->redirect(route('users.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.users.create');
    }
}
