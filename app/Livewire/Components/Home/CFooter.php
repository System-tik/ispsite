<?php

namespace App\Livewire\Components\Home;

use App\Models\Contact;
use Livewire\Component;

class CFooter extends Component
{
    public $contact;

    public function render()
    {
        $this->contact=Contact::all();
        return view('livewire.components.home.c-footer');
    }
}
