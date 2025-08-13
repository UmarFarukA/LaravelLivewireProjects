<?php

namespace App\Livewire\Admin\Payment;

use App\Models\Payment;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public $users = [];

    public $user_details = [];

    public $selectedUserId;

    public $allocation_id;

    public int $tricycle_id;

    public float $cost;

    public float $amount_paid;

    public float $amount;

    public int $week_number;

    public string $model_number;

    public function mount()
    {
        $this->users = User::has("allocation")->get();
    }

    public function updatedSelectedUserId($user_id)
    {

        if(!$user_id)return;

        $user = User::with("allocation")->find($user_id);

        if($user && $user->allocation) {
            $tricycle = $user->allocation->tricycle;

            $this->allocation_id = $user->allocation->id;
            $this->model_number = $tricycle->model_number;
            $this->user_details = $user;
            $this->tricycle_id = $tricycle?->id;
            $this->cost = $tricycle?->amount;
            $this->amount_paid = $user->allocation->payments()->sum('amount');
            $this->week_number = $user->allocation->payments()->count('week_number') + 1;
        }
    }

    public function store()
    {
        $fields = $this->validate([
            'amount' => 'required|numeric',
        ]);


        $fields['user_id'] = $this->selectedUserId;
        $fields['allocation_id'] = $this->allocation_id;
        $fields['payment_channel'] = "Cash";
        $fields['paid_at'] = now();
        $fields['week_number'] = $this->week_number;

        Payment::create($fields);

        session()->flash("success", "Payment successfully recorded");

        return $this->redirect(route("payment.index"));

    }
    public function render()
    {
        return view('livewire.admin.payment.create');
    }
}
