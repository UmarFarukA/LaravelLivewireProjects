<?php

namespace App\Livewire\Auth;

use App\Livewire\AuthComponent;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;

class Login extends AuthComponent
{
    #[Validate('required', message:'Phone number is required')]
    #[Validate('min:11', message:'Phone number must be valid')]
    public $phone = '';

    #[Validate('required', message:'Password field is required')]
    #[Validate('min:8')]
    public $password = '';

    public $loginError;

    public function authenticate()
    {
        $this->validate();

        $valid = Auth::attempt(['phone' => $this->phone, 'password' => $this->password]);

        if ($valid) {
            if(Auth::user()->role === 0) {

                return $this->redirectIntended('/dashboard', navigate:true);
            }

            dd('You are here admin');

        } else {
            $this->loginError = 'Phone number/Password is Invalid';
        }
    }

    public function render()
    {
        return view('livewire.Auth.login');
    }
}
