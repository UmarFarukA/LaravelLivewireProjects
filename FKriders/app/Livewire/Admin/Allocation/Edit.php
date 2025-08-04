<?php

namespace App\Livewire\Admin\Allocation;

use App\Models\Allocation;
use App\Models\Tricycle;
use App\Models\User;
use Flux\Flux;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public int $allocation_id;

    #[Validate("required|int")]
    public int $user_id;

    #[Validate("required|int")]
    public int $duration;

    #[Validate("required|int")]
    public int $allocated;

    public $current_user;

    public  string $tricycle = '';

    public $tricycles = [];

    public function mount()
    {
        $this->tricycles = Tricycle::with("brand")
                                    ->where("allocated", "=", 0)
                                    ->get();
    }

    #[On("edit-allocation")]
    public function edit(int $id)
    {
        $this->allocation_id = $id;

        $allocation = Allocation::with(["user", "tricycle"])->find($id);

        $fullname =  $allocation->user->fname . " ". $allocation->user->lname;
        $tricycle =  $allocation->tricycle->model_number ." - " .$allocation->tricycle->brand->name;

        $this->user_id = $allocation->user_id;
        $this->tricycle = $tricycle;
        $this->duration = $allocation->duration;
        $this->current_user = $fullname;
        $this->allocated = $allocation->tricycle->allocated;

        Flux::modal("edit_allocation")->show(true);
    }

    public function save()
    {
        $this->validate();

        $allocation = Allocation::find($this->allocation_id);

        $allocation->duration = $this->duration;

        $allocation->save();

        // Update the Allocated tricycle with allocated set to 1
        Tricycle::find($this->allocation_id)->update(["allocated" => $this->allocated]);

        Flux::modal("edit_allocation")->close(true);

        session()->flash("success","Allocation Updated Successfully");

        return $this->redirect(route("allocation.index"));
    }

    public function render()
    {
        return view('livewire.admin.allocation.edit');
    }
}
