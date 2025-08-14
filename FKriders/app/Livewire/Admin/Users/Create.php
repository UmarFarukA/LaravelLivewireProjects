<?php

namespace App\Livewire\Admin\Users;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class Create extends Component
{

    public string $fname = '';

    public string $lname = '';

    public string $mname = '';

    public string $email = '';

    public string $phone = '';

    public string $password = '';

    public string $password_confirmation = '';
    /**
     * Handle creation of user.
     */
    public function store(): void
    {
        $validated = $this->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'mname' => ['string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            'phone' => ['required', 'string', 'min:11', 'max:11', 'unique:'.User::class],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        session()->flash('success','New user created successfully');

        $this->redirect(route('users.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.users.create');
    }
}
