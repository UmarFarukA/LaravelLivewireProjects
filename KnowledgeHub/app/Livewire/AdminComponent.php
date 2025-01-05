<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.admin')]
class AdminComponent extends Component
{
    public $headerTitle = "";

    public function render()
    {
        return view('livewire.dashboard.index');
    }
}
