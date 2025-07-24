<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Flux\Flux;
use Livewire\Attributes\On;
use Livewire\Component;

class Delete extends Component
{

    public function render()
    {
        return view('livewire.admin.users.delete');
    }
}
