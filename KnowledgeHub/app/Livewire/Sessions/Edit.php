<?php

namespace App\Livewire\Sessions;

use App\Livewire\AdminComponent;
use App\Livewire\Forms\SessionForm;
use App\Models\knowledgeSessions;
use Masmerise\Toaster\Toaster;

class Edit extends AdminComponent
{
    public SessionForm $form;

    public function mount(knowledgeSessions $sess)
    {
        $this->form->setSession($sess);
    }

    public function save()
    {
        $this->form->update();

        Toaster::success('Session updated successfully');

        $this->redirect(route('sessions.index'), navigate: true);
    }


    public function render()
    {
        return view('livewire.sessions.edit');
    }
}