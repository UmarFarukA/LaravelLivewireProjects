<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.auth')]
class AuthComponent extends Component
{
    public function render()
    {
        return view('livewire.auth');
    }
}