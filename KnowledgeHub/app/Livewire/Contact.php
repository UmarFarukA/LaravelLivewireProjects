<?php

namespace App\Livewire;

use App\Models\Inquiry;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Contact extends Component
{
    #[Validate('required', message: 'Name field is required')]
    #[Validate('min:3', message: 'Name must be at least 3 characters')]
    #[Validate('string', message: 'Name must be sequence of characters')]
    public $name = '';

    #[Validate('required', message: 'Phone field is required')]
    #[Validate('min:11', message: 'Phone must be at least 11 characters')]
    #[Validate('min:14', message: 'A valid phone number is required')]
    public $phone = '';


    #[Validate('required', message: 'Email field is required')]
    #[Validate('email', message: 'A valid email is required')]
    public $email = '';

    #[Validate('required', message: 'Message field is required')]
    public $content = '';

    public function save()
    {
        $this->validate();

        Inquiry::create($this->only(['name', 'phone', 'email', 'content']));

        $this->reset();

        $this->redirect('/', navigate: true);
    }

    public function render()
    {
        return view('livewire.contact');
    }
}