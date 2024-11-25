<?php

namespace App\Livewire\Submissions;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('admin')]
#[Title('Submissions')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.submissions.index');
    }
}
