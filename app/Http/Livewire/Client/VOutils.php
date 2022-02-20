<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

class VOutils extends Component
{
    public $actus = [2,2,2,2,];
    public $liens = [2,2,2,2,];
    public $outils = [2,2,2,2];
    public function render()
    {
        return view('livewire.client.v-outils');
    }
}
