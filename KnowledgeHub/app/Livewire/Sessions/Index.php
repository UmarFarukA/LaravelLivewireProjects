<?php

namespace App\Livewire\Sessions;

use App\Livewire\AdminComponent;
use App\Models\knowledgeSessions;
use Livewire\Attributes\Computed;
use Masmerise\Toaster\Toaster;

class Index extends AdminComponent
{
    #[Computed(cache: true, key: 'session-lists')]
    public function sessions()
    {
        return knowledgeSessions::orderBy('status', 'desc')->get();
    }

    public function destroy(knowledgeSessions $session)
    {
        $session->delete();

        cache()->forget('session-lists');

        Toaster::success('Session deleted Successfully');
    }

    public function render()
    {
        cache()->forget('session-lists');

        return view('livewire.sessions.index');
    }
}