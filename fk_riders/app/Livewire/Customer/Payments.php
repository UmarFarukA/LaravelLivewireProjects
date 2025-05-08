<?php

namespace App\Livewire\Customer;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.customer')]
class Payments extends Component
{
    public function render()
    {
        return view('livewire.customer.payments');
    }
}
