<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Search extends Component
{
    #[Validate("required")]
    public $searchText = "";

    public $result = [];

    public function mount()
    {
        $this->result = Article::all();
    }

    public function updatedSearchText($value)
    {
        $this->reset("result");

        $this->validate();

        $searchTerm = '%' . $value . '%';

        $this->result = Article::where("title", "LIKE", $searchTerm)->get();
    }


    // public function searchArticle()
    // {
    //     $searchTerm = '%' . $this->search . '%';

    //     $this->result = Article::where('title', 'LIKE', $searchTerm)->get();
    // }

    public function render()
    {

        return view('livewire.search');
    }
}
