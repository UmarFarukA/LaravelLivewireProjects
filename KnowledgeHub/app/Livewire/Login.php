<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Title("Login")]
class Login extends Component
{
    #[Validate('required', message: "Email is required to login")]
    #[Validate("email", message: "A valid email is required")]
    public $email = "";

    #[Validate("required", message: "A password is required")]
    #[Validate("min:8", message: "Password must be at least eight characters")]
    public $password = "";

    public $loginError;

    public function authenticate()
    {
        $this->validate();
        $valid = Auth::attempt(['email' => $this->email, 'password' => $this->password]);

        if ($valid) {
            return $this->redirectIntended("/dashboard");
        } else {
            $this->loginError = "Email/Password is invalid";
        }
    }


    public function render()
    {
        return view('livewire.login');
    }
}
