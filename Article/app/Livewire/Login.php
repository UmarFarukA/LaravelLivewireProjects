<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.app')]
class Login extends Component
{
    #[Validate('required|email')]
    public $email = "";

    #[Validate('required|string')]
    public $password = '';

    public $loginMessage = '';

    public function authenticate()
    {
        $this->validate();

        $valid = Auth::attempt(['email' => $this->email, 'password' => $this->password]);

        if($valid) {
            $this->redirectIntended('/articles', navigate:true);
        } else {
            $this->loginMessage = 'Email or password is invalid!';
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
