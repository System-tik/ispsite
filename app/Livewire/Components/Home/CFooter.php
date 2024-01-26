<?php

namespace App\Livewire\Components\Home;

use App\Models\Article;
use App\Models\Contact;
use Livewire\Component;
use App\Models\Actualite;
use Illuminate\Support\Facades\DB;

class CFooter extends Component
{
    public $contact;
    public $evenement;
    public $article;

    public function render()
    {
        $this->contact=Contact::all();
        $this->evenement=DB::table('actualites')->take(4)->get();
        $this->article=DB::table('articles')->take(4)->get();
        return view('livewire.components.home.c-footer');
    }
}
