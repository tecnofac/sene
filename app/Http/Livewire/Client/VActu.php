<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\Actu;

class VActu extends Component
{
    
    public $actus;

    public function render()
    {
        $this->actus=Actu::all();
        return view('livewire.client.v-actu');
    }
}
