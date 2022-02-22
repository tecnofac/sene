<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\outil;
use App\Models\Actu;
use App\Models\liens;


class VOutils extends Component
{
    public $outils;
    public $actus;
    public $urls;
    public $oneO;

    public function render()
    {
        $this->actus = Actu::all();
        $this->outils = outil::all(); 
        $this->urls = liens::all(); 
        return view('livewire.client.v-outils');
    }

    public function mount($ido){
        $this->oneO = outil::find($ido);
    }
}
