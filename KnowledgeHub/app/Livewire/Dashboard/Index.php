<?php

namespace App\Livewire\Dashboard;

use App\Livewire\AdminComponent;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard')]
class Index extends AdminComponent
{
    public function render()
    {
        return view('livewire.dashboard.index');
    }
}
