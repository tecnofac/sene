<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\projet;
use App\Models\Actu;
use App\Models\liens;


class VProjet extends Component
{
    public $projets;
    public $actus;
    public $urls;
    public $oneP;

    public function render()
    {
        $this->actus = Actu::all();
        $this->urls = liens::all(); 
        $this->projets = projet::all();
        return view('livewire.client.v-projet');
    }

    public function mount($idp){
        $this->oneP = projet::find($idp);
    }
}
