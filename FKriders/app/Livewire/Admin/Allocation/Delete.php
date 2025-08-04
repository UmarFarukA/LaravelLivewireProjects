<?php

namespace App\Livewire\Admin\Allocation;

use App\Models\Allocation;
use App\Models\Tricycle;
use Flux\Flux;
use Livewire\Attributes\On;
use Livewire\Component;

class Delete extends Component
{
    public int $allocation_id;

    #[On("delete-allocation")]
    public function delete(int $id)
    {
        $this->allocation_id = $id;
        Flux::modal("delete-allocation")->show(true);
    }

    public function destroy()
    {
        $allocation = Allocation::find($this->allocation_id);

        $allocation->delete();

        Tricycle::find($allocation->tricycle->id)->update(["allocated" => 0]);

        Flux::modal("delete-allocation")->close(true);

        session()->flash("success","Allocation deleted successfully");

        return $this->redirect(route("allocation.index"));
    }
    public function render()
    {
        return view('livewire.admin.allocation.delete');
    }
}
