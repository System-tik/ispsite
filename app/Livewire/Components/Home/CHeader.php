<?php

namespace App\Livewire\Components\Home;

use App\Models\Header;
use Livewire\Component;

class CHeader extends Component
{
    public $headers;
    public function render()
    {
        $this->headers=Header::all();
        return view('livewire.components.home.c-header');
    }
}
