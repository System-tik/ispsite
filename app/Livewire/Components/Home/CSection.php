<?php

namespace App\Livewire\Components\Home;

use App\Models\Section;
use Livewire\Component;

class CSection extends Component
{
    public $sections;
    public function render()
    {
        $this->sections=Section::all();
        return view('livewire.components.home.c-section');
    }
}
