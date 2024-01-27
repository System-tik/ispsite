<?php

namespace App\Livewire\Pages;

use App\Models\Contact as Contacts;
use App\Models\Message;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Contact extends Component
{
    public $nom;
    public $email;
    public $message;
    public $numero;

    public $contacts;

    public $messages = [
        'nom.required' => 'Veuillez renseigner ce champ.',
        'email.required' => 'Veuillez renseigner ce champ.',
        'numero.required' => 'Veuillez renseigner ce champ.',
        'message.required' => 'Veuillez renseigner ce champ.',
        'email.email' => 'Email incorrect.',
        'numero.min' => 'Numéro  incorrect.',
        'numero.numeric' => 'Numéro  incorrect.',
        


    ];
    #[Layout('components.layouts.app')]
    public function render()
    {
        $this->contacts=Contacts::all();
        return view('livewire.pages.contact');
    }

    public function resetFields()
    {
        $this->nom = '';
        $this->email = '';
        $this->numero = '';
        $this->message = '';
    }

    public function sendMessage(){
        $validate = $this->validate([
            'nom' => 'required',
            'message' => 'required',
            'numero' => 'required|numeric|min:10',
            'email' => 'required|email'
        ]);

        $message = Message::create($validate);
        $this->resetFields();
    }
}
