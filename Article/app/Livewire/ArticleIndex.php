<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Computed;
// use Livewire\AdminComponent;
use Livewire\WithPagination;

class ArticleIndex extends AdminComponent
{
    use WithPagination;

    public $isPublished = false;

    #[Computed()]
    public function articles()
    {
        $query = Article::query();

        if($this->isPublished) {
            $query->where('published', '=', 1);
        }

        return $query->paginate(5, pageName:'articles-page');
    }

    public function delete(Article $article)
    {
        $article->delete();

    }

    public function showPublished()
    {
        $this->isPublished = true;

        $this->resetPage('articles-page');
    }

    public function showAll()
    {
        $this->isPublished = false;

        $this->resetPage('articles-page');
    }

    public function render()
    {
        return view('livewire.article-index');
    }
}
