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

        $this->dispatch(
            'alert',
            type: 'success',
            position: 'center',
            title: "Submission successfully sent",
            timer: 7200
        );

        // $this->alert('success', 'Submission successfully sent!');

        $this->redirect("/submission", navigate: true);
    }


    public function render()
    {
        return view('livewire.submissions.create');
    }
}