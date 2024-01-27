<?php

namespace App\Livewire\Pages;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;

class Articles extends Component
{
    use WithPagination;
    public $article;
    #[Layout('components.layouts.app')]
    public function render()
    {
        
        $this->article=Article::all();
        return view('livewire.pages.articles');
    }
}
