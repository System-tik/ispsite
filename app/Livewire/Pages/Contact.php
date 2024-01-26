<?php

namespace App\Livewire\Pages;

use App\Models\Contact as Contacts;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Contact extends Component
{
    public $contact;
    #[Layout('welcome')]
    public function render()
    {
        $this->contact=Contacts::all();
        return view('livewire.pages.contact');
    }
}
