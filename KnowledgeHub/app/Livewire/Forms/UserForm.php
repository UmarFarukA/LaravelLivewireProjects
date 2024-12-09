<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class UserForm extends Form
{
    public ?User $user;

    // #[Validate('required|string|min:3')]
    public $name = "";

    // #[Validate('required|email|unique:users,email')]
    public $email = "";

    // #[Validate('required|min:8|confirmed')]
    public $password = "";

    // #[Validate('required')]
    public $password_confirmation = "";

    public $photo = null;

    // #[Validate('required')]
    public $role;

    // #[Validate('required')]
    public $status;

    protected function rules()
    {
        return [
            'name' => 'required|min:3',
            'email' => 'required|email',

            'role' => 'required',
            'status' => 'required'
        ];
    }

    protected function messages()
    {
        return [
            'name.required' => 'Name field is required',
            'name.min' => 'Name must be at least 3 characters',
            'email.required' => 'Email field is required',
            'email.email' => 'A valid email is required',
        ];
    }

    public function setUser(User $user)
    {
        $this->user = $user;

        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->photo = $this->user->photo;
        $this->role = $this->user->role;
        $this->status = $this->user->status;
    }

    public function store()
    {

        $this->validate();
        $this->validate([
            'email' => 'unique:users,email',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        User::create($this->only(['name', 'email', 'password', 'photo', 'role', 'status']));
    }

    public function update()
    {

        $this->validate();

        // $this->validate([
        //     'email' => 'unique:users, email' . $this->user->id
        // ]);

        $this->user->update($this->only(['name', 'email', 'role', 'status']));
    }
}
