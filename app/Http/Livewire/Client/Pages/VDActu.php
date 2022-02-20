<?php

namespace App\Http\Livewire\Client\Pages;

use Livewire\Component;

class VDActu extends Component
{
    public $actus = [2,2,2,2,];
    public $liens = [2,2,2,2,];
    public function render()
    {
        return view('livewire.client.pages.v-d-actu');
    }
}
