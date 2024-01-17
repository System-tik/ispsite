<?php

namespace App\Livewire\Components\Home;

use Livewire\Component;
use App\Models\Actualite;

class CEvenement extends Component
{
    public $evenement;
    public function render()
    {
        $this->evenement=Actualite::all();
        return view('livewire.components.home.c-evenement');
    }
}
