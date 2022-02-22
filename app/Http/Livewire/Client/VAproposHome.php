<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\apropo;

class VAproposHome extends Component
{

    public $apropos;

    public function render()
    {
        $this->apropos=apropo::all();
        return view('livewire.client.v-apropos-home');
    }
}
