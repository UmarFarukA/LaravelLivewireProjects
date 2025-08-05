<?php

namespace App\Livewire\Admin\Payment;

use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public $users = [];

    public $user_details = [];

    public $selectedUserId;

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

            $this->model_number = $tricycle->model_number;
            $this->user_details = $user;
            $this->tricycle_id = $tricycle?->id;
            $this->cost = $tricycle?->amount;
            $this->amount_paid = $user->allocation->payments()->sum('amount');
        }
    }
    public function render()
    {
        return view('livewire.admin.payment.create');
    }
}
