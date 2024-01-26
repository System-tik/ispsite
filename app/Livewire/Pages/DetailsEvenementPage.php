<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Actualite;
use Livewire\Attributes\Layout;


class DetailsEvenementPage extends Component
{
    #[Layout('welcome')]
    public $evenement;
    public function render()
    {
        return view('livewire.pages.details-evenement-page');
    }
    public function mount($id){
        $this->evenement =Actualite::find($id);
    }
}
