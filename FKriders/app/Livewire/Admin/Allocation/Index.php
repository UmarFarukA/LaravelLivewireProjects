<?php

namespace App\Livewire\Admin\Allocation;

use App\Livewire\Admin\Dashboard;
use App\Models\Allocation;
use Livewire\Attributes\Computed;

// use Livewire\Component;

class Index extends Dashboard
{
    public $search = "";

    #[Computed]
    public function allocations()
    {

        $query = Allocation::query()->with(["user", "tricycle"]);

        if ($this->search) {

            $searchTerm = "%" . $this->search . "%";

            $query->where(function ($q) use ($searchTerm) {

                $q->whereHas("user",function($userQuery) use($searchTerm){
                    $userQuery->whereAny(["fname", "lname", "phone"],"like","%". $searchTerm ."%");
                });
            })
            ->orWhereHas("tricycle", function($tricycle) use($searchTerm){
                $tricycle->whereAny(["model_number", "plate_number"],"like","%". $searchTerm . "%");
            });
        }
        return $query->latest()->paginate(10, pageName: "allocation-page");
    }

    public function edit($id)
    {
        $this->dispatch("edit-allocation", $id);
    }

    public function delete($id)
    {
        $this->dispatch("delete-allocation", $id);
    }
    public function render()
    {
        return view('livewire.admin.allocation.index');
    }
}
