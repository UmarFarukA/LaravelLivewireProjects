<?php

namespace App\Livewire\Admin\Investor;

use App\Livewire\Admin\Dashboard;
use App\Models\Investor;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Index extends Dashboard
{
    public $search = "";

    // #[Computed]
    // public function investors()
    // {
    //     $query = Investor::query()->with("payments")
    // }
    public function render()
    {
        return view('livewire.admin.investor.index');
    }
}
