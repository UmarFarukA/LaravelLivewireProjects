<?php

namespace App\Livewire\Submissions;

use App\Livewire\Forms\SubmissionForm;
use Livewire\Component;

class Create extends Component
{
    public SubmissionForm $form;

    public function save()
    {
        $this->form->store();

        $this->dispatch(
            'alert',
            type: 'success',
            position: 'center',
            title: "Submission successfully sent",
            timer: 3600
        );

        $this->redirect("/submission", navigate: true);
    }

    public function render()
    {
        return view('livewire.submissions.create');
    }
}