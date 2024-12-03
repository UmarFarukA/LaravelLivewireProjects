<?php

namespace App\Livewire\Forms;

use App\Models\Submissions;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SubmissionForm extends Form
{
    public ?Submissions $submission;

    #[Validate('required', message: "Name is required")]
    #[Validate('min:3', message: "Name must be at least three characters")]
    public $name = "";

    #[Validate('required', message: "Email field is required")]
    #[Validate('email', message: "Valid email is required")]
    #[Validate('unique:users', message: "Email address already exists")]
    public $email = "";

    #[Validate('required', message: "Content field is required")]
    #[Validate('max_words:150', message: "Content must be at most 150 words.")]
    public $content = "";

    #[Validate('required', message: "Phone number field is required")]
    #[Validate('min:11', message: "A valid phone number is required")]
    #[Validate('max:11', message: "A valid phone number is required")]
    public $phone;

    public $status = '';

    public function setSubmission(Submissions $submission)
    {
        $this->submission = $submission;

        $this->name = $submission->name;
        $this->email = $submission->email;
        $this->content = $submission->content;
        $this->status = $submission->status;
        $this->phone = $submission->phone;
    }

    public function store()
    {
        $this->validate();

        // dump("Yes");

        Submissions::create($this->only(['name', 'email', 'phone', 'content']));

        $this->reset();
    }

    public function update()
    {
        $this->validate();

        $this->submission->update(
            $this->only(['name', 'email', 'content', 'phone', 'status'])
        );
    }
}