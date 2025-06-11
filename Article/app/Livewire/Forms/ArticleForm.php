<?php

namespace App\Livewire\Forms;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ArticleForm extends Form
{

    public Article $article;

    #[Validate('required|min:3')]
    public $title = '';

    #[Validate('required|min:3')]
    public $content = '';

    #[Validate('required|image|max:1024')]
    public $photo;

    public $photo_path;


    public $published = '';
    public $allowNotification = false;
    public $notifications = [];


    public function setArticle(Article $article)
    {
        $this->title = $article->title;
        $this->content = $article->content;
        $this->published = $article->published;
        $this->photo_path = $article->photo_path;
        $this->allowNotification = count($article->notifications) > 0;
        $this->notifications = $article->notifications  ?? [];


        $this->article = $article;
    }

    public function store()
    {
        $this->validate();

        if(!$this->allowNotification){

            $this->notifications = [];
        }

        if($this->photo){
            $this->photo_path = $this->photo->storePublicly('articles_photos', ['disk' => 'public']);
        }

        Article::create($this->only('title', 'content', 'published', 'photo_path', 'notifications'));
    }

    public function update()
    {
        $this->validate();

        if(!$this->allowNotification){
            $this->notifications = [];
        }


        if($this->photo){
            $this->photo_path = $this->photo->storePublicly('articles_photos', ['disk' => 'public']);
        }

        $this->article->update($this->only('title', 'content', 'published', 'notifications'));
    }
}
