<?php

namespace App\Livewire\Components\Home;

use App\Models\About;
use Livewire\Component;

class CAbout extends Component
{
    public $apropos;

    public function render()
    {
        $this->apropos=About::all()->limit(2);
        return view('livewire.components.home.c-about');
    }
}
