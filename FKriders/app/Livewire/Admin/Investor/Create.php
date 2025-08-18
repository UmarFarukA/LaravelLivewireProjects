<?php

namespace App\Livewire\Admin\Investor;

use App\Models\Investor;
use App\Models\InvestorPayment;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{

    public $users = [];

    public $user_id;

    #[Validate('required|integer')]
    public float $amount_invested;

    #[Validate('required|integer')]
    public int $duration;

    public function mount()
    {
        $this->users = User::where("role_id", "=", 3)->get();
    }

    public function save()
    {
        $fields = $this->validate();

        if (!$this->user_id) return;

        $fields["user_id"] = $this->user_id;

        Investor::create($fields);

        session()->flash("success", "Investment details successfully saved");

        return $this->redirect(route("investors.index"));
    }

    public function render()
    {
        return view('livewire.admin.investor.create');
    }
}
