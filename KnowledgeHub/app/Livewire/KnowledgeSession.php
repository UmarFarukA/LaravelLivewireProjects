<?php

namespace App\Livewire;

use App\Models\knowledgeSessions;
use App\Models\Submissions;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.app')]
#[Title('Knowledge Sessions')]
class KnowledgeSession extends Component
{
    public function render()
    {
        $query = Submissions::where('status', '1')->get();
        return view('livewire.knowledge-session', [
            'sessions' => $query
        ]);
    }
}