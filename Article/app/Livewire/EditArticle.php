<?php

namespace App\Livewire;

use App\Livewire\Forms\ArticleForm;
use App\Models\Article;
use Livewire\WithFileUploads;

class EditArticle extends AdminComponent
{
    use WithFileUploads;

    public ArticleForm $form;

    public function mount(Article $article) {

        $this->form->setArticle($article);
    }

    public function save()
    {
        $this->form->update();

        session()->flash('success', 'Article updated successfully');

        $this->redirect(route('article-index'), navigate:true);
    }


    public function render()
    {
        return view('livewire.edit-article');
    }
}
