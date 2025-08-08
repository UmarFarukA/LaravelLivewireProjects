<?php

namespace App\Livewire\Admin\Payment;

use App\Models\Payment;
use Flux\Flux;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{

    public $payment_id;

    #[Validate('required|numeric|min:5000')]
    public int $amount;

    #[Validate('required|integer')]
    public int $week_number;

    #[Validate('required|integer')]
    public int $payment_status;

    #[On("edit-payment")]
    public function edit($id)
    {
        $payment = Payment::find($id);

        $this->payment_id = $id;

        $this->amount = $payment->amount;
        $this->week_number = $payment->week_number;
        $this->payment_status = $payment->payment_status;

        Flux::modal("edit-payment")->show(true);
    }

    public function update()
    {
        $payment_to_update = Payment::find($this->payment_id);

        if(!$this->payment_status) return;

        $payment_to_update->amount = $this->amount;
        $payment_to_update->week_number = $this->week_number;
        $payment_to_update->payment_status = $this->payment_status;

        $payment_to_update->save();

        // dd($this->payment_status);

        Flux::modal("edit-payment")->close(true);

        session()->flash("success", "Payment details updated successfully");

        $this->redirect(route("payment.index"));
    }
    public function render()
    {
        return view('livewire.admin.payment.edit');
    }
}
