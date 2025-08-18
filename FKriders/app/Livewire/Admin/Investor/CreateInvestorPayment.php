<?php

namespace App\Livewire\Admin\Investor;

use App\Models\Investor;
use App\Models\InvestorPayment;
use App\Models\User;
use Livewire\Component;

class CreateInvestorPayment extends Component
{
    public $users = [];

    public $user_details = null;

    public $selectedUserId;

    public float $amount_invested;

    public float $amount_due;

    public float $amount_paid;

    public int $payment_number;

    public function mount()
    {
        $this->users = User::where("role_id", "=", 3)->get();
    }

    public function updatedSelectedUserId($user_id)
    {
        if(!$user_id)return;

        $investor = Investor::where('user_id', $this->selectedUserId)
                            ->with('payments')
                            ->first();

        dd($investor?->payments);

        if($investor) {
            $this->user_details = $investor;

            $this->amount_invested = $investor->amount_invested;

            $this->amount_paid = $investor->payments->sum('');
            $this->payment_number = $investor->payments->count('payment_number') + 1;
        }
    }

    public function store()
    {
        $fields = $this->validate([
            'amount_due' => 'required|numeric|min:1000',
        ]);


        $fields['investor_id'] = $this->selectedUserId;
        $fields['payment_number'] = $this->payment_number;

        InvestorPayment::create($fields);

        session()->flash("success", "Payment successfully added");

        return $this->redirect(route("investors.index"));

    }
    public function render()
    {
        return view('livewire.admin.investor.create-investor-payment');
    }
}
