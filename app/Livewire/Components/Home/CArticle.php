<?php

namespace App\Livewire\Components\Home;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class CArticle extends Component
{
    use WithPagination;
    public $articles;
    public function render()
    {
        $this->articles=Article::all()->limit(6);
        return view('livewire.components.home.c-article');
    }
}
