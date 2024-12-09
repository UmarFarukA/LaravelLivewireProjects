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


    #[Computed()]
    public function submissions()
    {
        $searchTerm = "%" . $this->search . "%";
        return Submissions::whereAny(['name', 'email', 'content', 'status'], 'LIKE', $searchTerm)
            ->latest()
            ->paginate($this->limit);
    }

    public function destroy(Submissions $submission)
    {
        $submission->delete();

        unset($this->submissions);
    }

    public function render()
    {
        return view('livewire.submissions.index');
    }
}
