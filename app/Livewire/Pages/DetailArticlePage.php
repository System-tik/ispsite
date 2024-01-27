<?php

namespace App\Livewire\Pages;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Layout;


class DetailArticlePage extends Component
{
    public $article;

    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.pages.detail-article-page');
    }
    public function mount($id){
        $this->article=Article::find($id);    
    }
}
