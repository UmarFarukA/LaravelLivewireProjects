<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("components.layouts.app")]
class Home extends Component
{

    public $username = '';

    public $password = '';

    public $loginError;

    protected function rules()
    {
        return [
            'username' => 'required|string|min:6',
            'password' => 'required|min:8|string'
        ];
    }

    protected function messages()
    {
        return [
            'username.required' => 'Username is required.',
            'username.min' => 'Username must be at least 6 characters.',
            'username.string' => 'Invalid username.',
            'password.required' => 'Password field is required.',
            'password.min' => 'Invalid password.',
            'password.string' => 'Password must contain characters as numbers.'
        ];
    }

    public function login()
    {
        $this->validate();
        $valid = Auth::attempt(['username' => $this->username, 'password' => $this->password]);

        if ($valid) {
            $this->redirect('/dashboard', navigate: true);
        } else {
            $this->loginError = 'Username/Password is invalid.';
        }
    }

    public function render()
    {
        return view('livewire.home');
    }
}
