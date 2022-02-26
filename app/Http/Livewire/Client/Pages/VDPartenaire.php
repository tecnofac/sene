<?php

namespace App\Http\Livewire\Client\Pages;

use Livewire\Component;
use App\Models\partenaire;

class VDPartenaire extends Component
{
    public $typ;
    public $partenaires;
    
    public function render()
    {
        $this->partenaires=partenaire::all();
        return view('livewire.client.pages.v-d-partenaire');
    }

    public function mount($type){
        $this->typ = $type;
    }
}
