<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\Offre;
use App\Models\outil;
use App\Models\Actu;
use App\Models\liens;

class VOffres extends Component
{
    public $selectedId;
    public $titre;
    public $description;
    public $contacts;
    public $offres;
    public $outils;
    public $actus;
    public $urls;

    public function render()
    {
        $this->actus = Actu::all();
        $this->outils = outil::all(); 
        $this->urls = liens::all(); 
        $this->offres=Offre::all();
        return view('livewire.client.v-offres');
    }
}
