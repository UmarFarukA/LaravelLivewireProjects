<?php

namespace App\Livewire\Users;

use App\Livewire\AdminComponent;
use App\Livewire\Forms\UserForm;

class Create extends AdminComponent
{
    public UserForm $form;

    public function save()
    {
        $this->form->store();

        $this->redirect("/dashboard/users", navigate: true);
    }

    public function render()
    {
        return view('livewire.users.create');
    }
}
