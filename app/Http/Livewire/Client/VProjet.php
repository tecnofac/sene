<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

class VProjet extends Component
{
    public $actus = [2,2,2,2,];
    public $liens = [2,2,2,2,];
    public $projets = [2,2,2,2];
    public function render()
    {
        return view('livewire.client.v-projet');
    }
}
