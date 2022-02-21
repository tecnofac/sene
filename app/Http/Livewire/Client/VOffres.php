<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\Offre;

class VOffres extends Component
{
    public $selectedId;
    public $titre;
    public $description;
    public $contacts;
    public $offres;

    public function render()
    {
        $this->offres=Offre::all();
        return view('livewire.client.v-offres');
    }
}
