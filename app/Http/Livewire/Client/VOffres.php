<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;

class VOffres extends Component
{
    public $actus = [2,2,2,2,];
    public $liens = [2,2,2,2,];
    public $offres = [2,2,2,2];
    public function render()
    {
        return view('livewire.client.v-offres');
    }
}
