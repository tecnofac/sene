<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\outil;
use App\Models\projet;

class Nav extends Component
{
    public $outils;
    public $projets;
    public function render()
    {
        $this->projets = projet::all();
        $this->outils = outil::all();
        return view('livewire.client.nav');
    }
}
