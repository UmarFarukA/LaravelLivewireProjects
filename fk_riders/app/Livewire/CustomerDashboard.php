<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.customer')]
class CustomerDashboard extends Component
{
    public function render()
    {
        return view('livewire.customer.index');
    }
}