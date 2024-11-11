<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Users extends Component
{
    #[Validate("required|min:2|max:25")]
    public $name = "";

    #[Validate("required|unique:users|email")]
    public $email = "";

    #[Validate("required|min:6|max:25")]
    public $password = "";

    public function create()
    {
        $this->validate();

        User::create($this->only(['name', 'email', 'password']));

        $this->reset(["name", "email", "password"]);
    }

    public function render()
    {
        return view('livewire.users');
    }
}
