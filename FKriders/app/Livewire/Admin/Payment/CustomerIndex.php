<?php

namespace App\Livewire\Admin\Payment;

use App\Livewire\Admin\Dashboard;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;

class CustomerIndex extends Dashboard
{
    public $total_amount_paid;

    public $payments;

    public function mount()
    {
        $this->payments = Payment::with(["allocation", "user"])
                        ->where("user_id", "=", Auth::user()->id)
                        ->get();

        $this->total_amount_paid = $this->payments->sum('amount');
    }

    // #[Computed]
    // public function payments()
    // {
    //     $payments = Payment::with(["allocation", "user"])
    //                     ->where("user_id", "=", Auth::user()->id)
    //                     ->get();

    //     $this->total_amount_paid = $payments->sum('amount');
    //     // dd ($this->total_amount_paid);
    //     return $payments;
    // }
    public function render()
    {
        return view('livewire.admin.payment.customer-index');
    }
}
