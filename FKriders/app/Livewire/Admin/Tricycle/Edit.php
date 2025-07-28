<?php

namespace App\Livewire\Admin\Tricycle;

use App\Livewire\Admin\Dashboard;
use App\Livewire\Forms\TricycleForm;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Tricycle;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Dashboard
{

    use WithFileUploads;
    public TricycleForm $form;
    public $categories = [];
    public $brands = [];

    public function mount(Tricycle $tricycle)
    {
        $this->form->setTricycle($tricycle);
        $this->categories = Category::all();
        $this->brands = Brand::all();
    }

    public function save()
    {
        $this->form->update();

        session()->flash("success","Tricycle updated successfully");

        return $this->redirect(route("tricycle.index"));
    }
    public function render()
    {
        return view('livewire.admin.tricycle.edit');
    }
}
