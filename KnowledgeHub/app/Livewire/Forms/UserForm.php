<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserForm extends Form
{
    public ?User $user;

    #[Validate('required', message: "Name field is required")]
    #[Validate('min:3', message: "Name must be at least three characters")]
    // #[Validate("string", message: "A valid name is required")]
    public $name = "";

    #[Validate('required', message: "Email field is required")]
    #[Validate('email', message: "A valid email is required")]
    #[Validate('unique:users', message: "Email already exists")]
    public $email = "";

    #[Validate('required', message: "Password field is required")]
    #[Validate('min:8', message: "Password must be at least eight (8) characters")]
    #[Validate('confirmed', message: "Password must match")]
    public $password = "";

    #[Validate('required', message: "Password Comfirmation is required")]
    public $password_confirmation = "";

    #[Validate(['photo' => 'image|max:1024'])]
    public $photo = "";

    public $role = "";

    public function setUser(User $user)
    {
        $this->user = $user;

        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->photo = $user->photo;
        $this->role = $user->role;
    }

    public function store()
    {
        $this->validate();

        User::create($this->only(['name', 'email', 'password', 'role', 'photo']));
    }

    public function update()
    {
        $this->validate();

        $this->user->update($this->only(['name', 'email', 'password', 'photo', 'role']));
    }
}
