<?php

namespace App\Livewire\Users;

use App\Livewire\AdminComponent;
use App\Livewire\Forms\UserForm;
use Masmerise\Toaster\Toaster;

class Create extends AdminComponent
{
    public UserForm $form;

    public function save()
    {
        $this->form->store();

        Toaster::success("New user created successfully");

        $this->redirect("/dashboard/users", navigate: true);
    }

    public function render()
    {
        return view('livewire.users.create');
    }
}