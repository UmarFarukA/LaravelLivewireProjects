<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class PublishedCount extends Component
{
    public $count = 0;

    public function mount()
    {
        $this->count = count(Article::where('published', '=', 1)->get());
    }

    public function render()
    {
        return view('livewire.published-count');
    }
}
