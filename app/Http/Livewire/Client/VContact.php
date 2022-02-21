<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\messages;

class VContact extends Component
{
    public $selectedId;
    public $nom = 'joel';
    public $email;
    public $sujet;
    public $contenu = 'la joie';
    public $messagess;

    public function render()
    {
        $this->messagess=messages::all();
        return view('livewire.client.v-contact');
    }
}
