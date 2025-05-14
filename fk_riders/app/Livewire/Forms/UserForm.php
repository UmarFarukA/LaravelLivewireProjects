<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Livewire\Form;

class UserForm extends Form
{
    public User $user;

    public $name = '';

    public $phone;

    public $email = '';

    public $password = '';

    public $password_confirmation = '';


    protected function rules()
    {
        return [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|min:11|max:11'
        ];
    }

    protected function messages()
    {
        return [
            'name.required' => 'Name field is required',
            'name.min' => 'Name must be at least 3 characters',
            'email.required' => 'Email field is required',
            'email.email' => 'A valid email is required',
            'phone.required' => 'A valid phone number is required',
            'phone.min' => 'Phone Number must be valid',
            'phone.max' => 'Phone number cannot be morethan 11 characters',

        ];
    }

    
    public function setUser(User $user){
        $this->user = $user;

        $this->name = $user->name;
        $this->phone = $user->phone;
        $this->email = $user->email;

    }

    public function store()
    {
        $this->validate();
        $this->validate([
            'email' => 'unique:users,email',
            'phone' => 'unique:users,phone',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        User::create($this->only(['name', 'email', 'password', 'phone']));
    }

    public function update()
    {
        // Validate
        // Update the user
    }
}
