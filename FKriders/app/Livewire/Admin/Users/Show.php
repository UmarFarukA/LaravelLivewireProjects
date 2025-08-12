<?php

namespace App\Livewire\Admin\Users;

use App\Livewire\Admin\Dashboard;
use App\Models\User;

class Show extends Dashboard
{
    public User $user;

    public function show(User $user)
    {
        $this->user = $user::with('allocation.payments')->first();
    }

    public function render()
    {
        return view('livewire.admin.users.show', [
            'user' => $this->user
        ]);
    }
}
