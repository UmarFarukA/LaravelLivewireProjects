<?php

namespace App\Livewire\Auth;

use App\Livewire\AuthComponent;
use App\Livewire\Forms\UserForm;

class SignUp extends AuthComponent
{
    public UserForm $form;

    public function save(){

        $this->form->store();

        $this->redirect('/dashboard', navigate:true);
    }

    public function render()
    {
        return view('livewire.Auth.signup');
    }
}
