<?php

namespace App\Livewire\Submissions;

// use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Livewire\Forms\SubmissionForm;
use Livewire\Component;

class Create extends Component
{
    // use LivewireAlert;

    public SubmissionForm $form;

    public function save()
    {
        $this->form->store();

        $this->redirect("/submission", navigate: true);
    }


    public function render()
    {
        return view('livewire.submissions.create');
    }
}
