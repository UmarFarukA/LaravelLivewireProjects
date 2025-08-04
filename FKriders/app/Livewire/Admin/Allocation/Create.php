<?php

namespace App\Livewire\Admin\Allocation;

use App\Models\Allocation;
use App\Models\Tricycle;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    public $users = [];
    public $tricycles = [];

    #[Validate("required|int")]
    public int $duration;

    #[Validate("required|int")]
    public int $user_id;

    #[Validate("required|int")]
    public int $tricycle_id;

    public function mount()
    {
        $this->users = User::whereDoesntHave("allocation")->get();
        $this->tricycles = Tricycle::with("brand")
                                    ->where("allocated", "=", 0)
                                    ->get();
    }

    public function save()
    {
        $this->validate();

        if($this->user_id == 00)
        {
            return back()->with("user_id","Select User");
        }

        Allocation::create($this->only(["duration", "user_id", "tricycle_id"]));

        Tricycle::find($this->tricycle_id)->update(["allocated" => 1]);

        session()->flash("success","Tricycle Allocated successfully");

        return $this->redirect(route("allocation.index"));
    }
    public function render()
    {
        return view('livewire.admin.allocation.create');
    }
}
