<?php

namespace App\Livewire\Submissions;

use App\Livewire\AdminComponent;
use App\Livewire\Forms\SubmissionForm;
use App\Models\Submissions;
use Livewire\Attributes\Title;
use Masmerise\Toaster\Toaster;

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

        Toaster::success("Submission updated successfully.");

        $this->redirect('/dashboard/submissions', navigate: true);
    }


    public function render()
    {
        return view('livewire.submissions.edit');
    }
}