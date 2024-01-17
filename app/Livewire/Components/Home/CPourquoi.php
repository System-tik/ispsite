<?php

namespace App\Livewire\Components\Home;

use Livewire\Component;
use App\Models\Pourquoi;

class CPourquoi extends Component
{
    public $pourquoi;
    public function render()
    {
        $this->pourquoi=Pourquoi::all();
        return view('livewire.components.home.c-pourquoi');
    }
}
