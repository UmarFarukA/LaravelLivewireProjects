<?php

namespace App\Livewire\Dashboard;

use App\Livewire\AdminComponent;
use App\Models\Submissions;
use App\Models\User;
use Livewire\Attributes\Reactive;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard')]
class Index extends AdminComponent
{

    public function render()
    {
        return view('livewire.dashboard.index', [
            "usersCount" => User::count(),
            "submissionCount" => Submissions::count()
        ]);
    }
}
