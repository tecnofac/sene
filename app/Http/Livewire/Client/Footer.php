<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\Contact;

class Footer extends Component
{
    public $selectedId;
    public $type;
    public $contenu;
    public $icon;
    public $Contacts;

    public function render()
    {
        $this->Contacts=Contact::all();
        return view('livewire.client.footer');
    }
}
