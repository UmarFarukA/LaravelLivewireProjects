<?php

namespace App\Livewire\Forms;

use App\Models\knowledgeSessions;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SessionForm extends Form
{
    public ?knowledgeSessions $session;

    public $title = '';
    public $venue = '';
    public $date = '';
    public $status = '';
    public $resolution;

    protected function rules()
    {
        return [
            'title' => 'required|string|min:3',
            'venue' => 'required|string|min:3',
            'date' => 'required',
            'status' => 'required'
        ];
    }

    protected function messages()
    {
        return [
            'title.required' => 'Title field is required.',
            'title.string' => 'A valid Title is required.',
            'title.min' => 'Name must be at least 3 characters.',
            'venue.required' => 'Venue field is required.',
            'venue.string' => 'A valid venue is required.',
            'venue.min' => 'Venue must be at least 3 characters.',
            'date.required' => 'Date field is required.',
            'status.required' => 'Status field is required.',
        ];
    }

    public function setSession(knowledgeSessions $sess)
    {
        $this->session = $sess;

        $this->title = $this->session->title;
        $this->venue = $this->session->venue;
        $this->date = $this->session->date;
        $this->status = $this->session->status;
        $this->resolution = $this->session->resolution;
    }

    public function store()
    {
        $this->validate();

        knowledgeSessions::create($this->only(['title', 'venue', 'date', 'status']));
    }

    public function update()
    {
        $this->validate();

        $this->session->update($this->only(['title', 'venue', 'date', 'status', 'resolution']));
    }
}