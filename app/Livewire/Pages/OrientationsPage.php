<?php

namespace App\Livewire\Pages;

use App\Models\Orientation;
use Livewire\Component;
use Livewire\Attributes\Layout;

class OrientationsPage extends Component
{
    #[Layout('components.layouts.app')]
    public $sections;
    public $orientations;
    public function render()
    {
        return view('livewire.pages.orientations-page');
    }

    public function mount($id){
        //$this->sections = Section::find($id);
        $this->orientations=Orientation::where('departement_id','=',$id)->get();
    }
}
