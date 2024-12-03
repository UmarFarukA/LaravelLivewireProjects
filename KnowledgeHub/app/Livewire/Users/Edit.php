<?php

namespace App\Livewire\Users;

use App\Livewire\AdminComponent;
use App\Livewire\Forms\UserForm;
use App\Models\User;

class Edit extends AdminComponent
{
    public UserForm $form;

    public function mount(User $user)
    {
        $this->form->setUser($user);
    }

    public function save()
    {
        $this->form->update();
        $this->redirect("/dashboard/users");
    }

    public function render()
    {
        return view('livewire.users.edit');
    }
}
