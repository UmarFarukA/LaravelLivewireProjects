<?php

namespace App\Livewire\Submissions;

use App\Livewire\AdminComponent;
use App\Models\Submissions;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

#[Layout('components.layouts.admin')]
#[Title('Submissions')]
class Index extends AdminComponent
{
    public $limit = 5;

    public $search = "";
    public $header = "Submissions";

    public $showEditModal = false;

    public function openEditModal()
    {
        $this->showEditModal;
    }

    #[Computed()]
    public function submissions()
    {
        return Submissions::latest()->paginate($this->limit);
    }

    public function render()
    {
        return view('livewire.submissions.index');
    }
}