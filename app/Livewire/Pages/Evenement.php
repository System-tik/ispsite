<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\Actualite;

class Evenement extends Component
{
    public $evenement;
    #[Layout('welcome')]
    public function render()
    {
        $this->evenement=Actualite::all();
        return view('livewire.pages.evenement');
    }
}
