<?php

namespace App\Http\Livewire\Client\Pages;

use Livewire\Component;
use App\Models\outil;
use App\Models\Actu;
use App\Models\liens;

class VDActu extends Component
{
    public $outils;
    public $actus;
    public $urls;
    public $oneA;

    public function render()
    {
        $this->actus = Actu::all();
        $this->outils = outil::all(); 
        $this->urls = liens::all(); 
        return view('livewire.client.pages.v-d-actu');
    }

    public function mount($ida){
        $this->oneA = Actu::find($ida);
    }
}
