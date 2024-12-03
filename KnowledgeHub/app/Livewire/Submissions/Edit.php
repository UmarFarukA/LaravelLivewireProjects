<?php

namespace App\Livewire\Submissions;

use App\Livewire\AdminComponent;
use App\Livewire\Forms\SubmissionForm;
use App\Models\Submissions;
use Livewire\Attributes\Title;

#[Title('Submissions')]
class Edit extends AdminComponent
{

    public SubmissionForm $form;

    public function mount(Submissions $submission)
    {
        $this->form->setSubmission($submission);
    }

    public function save()
    {

        $this->form->update();

        $this->dispatch(
            'alert',
            type: 'success',
            position: 'top-end',
            title: "Submission successfully updated",
            toast: true,
            timer: 7200
        );

        $this->redirect('/dashboard/submissions', navigate: true);
    }


    public function render()
    {
        return view('livewire.submissions.edit');
    }
}