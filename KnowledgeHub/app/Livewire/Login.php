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
    #[Validate("min:6", message: "Password must be at least six characters")]
    public $password = "";

    public function authenticate()
    {
        $atttributes = $this->validate();

        if (Auth::attempt($atttributes)) {
            return redirect()->route("home");
        }

        session()->flash("error", "Invalid credentials");
    }


    public function render()
    {
        return view('livewire.login');
    }
}
