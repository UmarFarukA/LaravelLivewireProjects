<?php

namespace App\Livewire\Admin\Tricycle;

use App\Models\Tricycle;
use Flux\Flux;
use Livewire\Attributes\On;
use Livewire\Component;

class Delete extends Component
{

    public $tricycle_id;

    #[On("delete-tricycle")]
    public function delete(int $id)
    {
        $this->tricycle_id = $id;
        Flux::modal("delete-tricycle")->show();
    }

    public function destroy()
    {

        $tricycle = Tricycle::find($this->tricycle_id);

        $tricycle->delete();

        Flux::modal("delete-tricycle")->close();

        session()->flash("success","Tricycle Deleted Successfully");

        return $this->redirect(route("tricycle.index"), navigate:true);
    }
    public function render()
    {
        return view('livewire.admin.tricycle.delete');
    }
}
