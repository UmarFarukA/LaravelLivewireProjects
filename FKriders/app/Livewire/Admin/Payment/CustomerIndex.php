<?php

namespace App\Livewire\Admin\Payment;

use App\Livewire\Admin\Dashboard;
use Livewire\Component;

class CustomerIndex extends Dashboard
{
    public function render()
    {
        return view('livewire.admin.payment.customer-index');
    }
}
