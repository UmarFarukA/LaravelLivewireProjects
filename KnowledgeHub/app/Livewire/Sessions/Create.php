<?php

namespace App\Livewire\Sessions;

use App\Livewire\AdminComponent;
use App\Livewire\Forms\SessionForm;
use Masmerise\Toaster\Toaster;

class Create extends AdminComponent
{
    public SessionForm $form;

    public function save()
    {
        $this->form->store();

        Toaster::success("New session created successfully");

        $this->redirect(route('sessions.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.sessions.create');
    }
}