<?php

namespace App\Livewire\Pages;

use App\Models\About as Apropos;
use Livewire\Component;
use Livewire\Attributes\Layout;

class About extends Component
{
    public $apropos;

    #[Layout('welcome')]
    public function render()
    {
        $this->apropos=Apropos::all();
        return view('livewire.pages.about');
    }
}
