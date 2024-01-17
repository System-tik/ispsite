<?php

namespace App\Livewire\Components\Home;

use App\Models\Article;
use Livewire\Component;

class CArticle extends Component
{
    public $articles;
    public function render()
    {
        $this->articles=Article::all();
        return view('livewire.components.home.c-article');
    }
}
