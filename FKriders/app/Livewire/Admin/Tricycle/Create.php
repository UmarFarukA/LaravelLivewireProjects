<?php

namespace App\Livewire\Admin\Tricycle;

use App\Livewire\Admin\Dashboard;
use App\Livewire\Forms\TricycleForm;
use App\Models\Brand;
use App\Models\Category;
use Livewire\WithFileUploads;

class Create extends Dashboard
{
    use WithFileUploads;
    public TricycleForm $form;

    public $categories = [];
    public $brands = [];

    public function save()
    {
        $this->form->store();

        session()->flash("success", "New Tricycle successfully added");

        return $this->redirect(route("tricycle.index"), navigate:true);
    }

    public function mount()
    {
        $this->categories = Category::all();
        $this->brands = Brand::all();
    }

    public function render()
    {
        return view('livewire.admin.tricycle.create');
    }
}
