<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout("components.layouts.app")]
class News extends Component
{
    #[Computed()]
    public function posts()
    {
        return Post::latest()->get();
    }

    public function render()
    {
        return view('livewire.news');
    }
}
