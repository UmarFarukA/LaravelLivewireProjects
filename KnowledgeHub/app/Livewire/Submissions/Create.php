<?php

namespace App\Livewire\Submissions;

// use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Livewire\Forms\SubmissionForm;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class Create extends Component
{
    // use LivewireAlert;

    public SubmissionForm $form;

    public function save()
    {
        $this->form->store();

        Toaster::success('Submission created Successfully.');

        $this->redirect("/submission", navigate: true);
    }


    public function render()
    {
        return view('livewire.submissions.create');
    }
}