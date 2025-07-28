<?php

namespace App\Livewire\Admin\Tricycle;

use App\Livewire\Admin\Dashboard;
use App\Models\Tricycle;
use Livewire\Attributes\Computed;

class Index extends Dashboard
{
    public $search = "";


    #[Computed("")]
    public function tricycles()
    {
        $query = Tricycle::query();

        if($this->search)
        {
            $query->whereAny(["brand", "model_number"], "like", "%".$this->search."%");
        }

        return $query->latest()->paginate(10, pageName:"tricycles-page");
    }

    public function delete($id)
    {
        $this->dispatch("delete-tricycle", $id);
    }

    public function render()
    {
        return view('livewire.admin.tricycle.index');
    }
}
