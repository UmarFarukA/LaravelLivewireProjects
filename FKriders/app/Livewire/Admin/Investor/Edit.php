<?php

namespace App\Livewire\Admin\Investor;

use App\Models\InvestorPayment;
use Flux\Flux;
use Livewire\Attributes\On;
use Livewire\Component;

class Edit extends Component
{
    public int $amount_due;

    public int $id;

    #[On("edit-investor")]
    public function edit($id){
        $this->id = $id;

        $payment = InvestorPayment::find($id);

        $this->amount_due = $payment->amount_due;

        Flux::modal('edit-investor-payment')->show(true);
    }

    public function store(){
        $this->validate([
            'amount_due' => 'required|integer|min:1000'
        ]);

        $payment = InvestorPayment::find($this->id);

        $payment->amount_due = $this->amount_due;

        $payment->save();

        Flux::modal('edit-investor-payment')->close(true);

        session()->flash("success", "Payment updated Successfully");

        $this->redirect(route("investors.index"));
    }
    public function render()
    {
        return view('livewire.admin.investor.edit');
    }
}
