<?php

namespace App\Livewire\Pages;

use App\Models\Section as ModelsSection;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Section extends Component
{
    public $sections;

    public function render()
    {
        $this->sections=ModelsSection::all();
        return view('livewire.pages.section');
    }
}
