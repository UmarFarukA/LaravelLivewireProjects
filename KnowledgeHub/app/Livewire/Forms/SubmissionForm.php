<?php

namespace App\Livewire\Forms;

use App\Models\Submissions;
use Livewire\Form;

// use App\Models\User;
// use Illuminate\Validation\Rule;
// use Livewire\Attributes\Validate;

class SubmissionForm extends Form
{
    public ?Submissions $submission;

    public $name = "";
    public $email = "";
    public $content = "";
    public $phone;
    public $status = '';

    protected function rules()
    {
        return [
            'name' => 'required|min:3',
            'email' =>  'required|email',
            'content' => 'required|string',
            'status' => 'required'
        ];
    }

    protected function messages()
    {
        return [
            'name.required' => 'Name field is required',
            'name.min' => 'Name must be at least 3 characters',
            'name.string' => 'Name must contain sequence of characters',
            'email.required' => 'Email is required',
            'email.email' => 'A valid email is required',
            'email.unique' => 'Email already exists',
            'content.required' => 'Content is required',
            'content.string' => 'Content must be sequence of characters/words',
            'content.max_words' => 'Content must not exceed maximum of 150 words',
            'phone.required' => 'Phone field is required',
            'phone.min' => 'A valid phone number is requred'
        ];
    }

    public function setSubmission(Submissions $submission)
    {
        $this->submission = $submission;

        $this->name = $this->submission->name;
        $this->email = $this->submission->email;
        $this->content = $this->submission->content;
        $this->status = $this->submission->status;
        $this->phone = $this->submission->phone;
    }

    public function store()
    {
        $this->validate();

        $this->validate([
            'phone' => 'required|min:11|max:11',
        ]);

        Submissions::create($this->only(['name', 'email', 'phone', 'content']));

        $this->reset();
    }

    public function update()
    {
        $this->validate();

        $this->validate([
            'email' => 'unique:users,email'
        ]);

        $this->submission->update(
            $this->only(['name', 'email', 'content', 'phone', 'status'])
        );
    }
}
