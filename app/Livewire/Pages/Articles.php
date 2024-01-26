<?php

namespace App\Livewire\Pages;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Articles extends Component
{
    public $article;
    #[Layout('welcome')]
    public function render()
    {
        $this->article=Article::all();
        return view('livewire.pages.articles');
    }
}
