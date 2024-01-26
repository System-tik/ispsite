<?php

namespace App\Livewire\Pages;

use App\Models\Section;
use Livewire\Component;
use App\Models\Departement;
use Livewire\Attributes\Layout;

class DetailSection extends Component
{
    #[Layout('welcome')]
    public $sections;
    public $departement;
    public function render()
    {
        
        return view('livewire.pages.detail-section');
    }
    public function mount($id){
        $this->sections = Section::find($id);
        $this->departement=Departement::where('section_id','=',$id)->get();
    }
}
