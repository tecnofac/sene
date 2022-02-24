<?php

namespace App\Http\Livewire\Client\Pages;

use Livewire\Component;
use App\Models\apropo;
use App\Models\Actu;
use App\Models\liens;

class VDApropos extends Component
{
    public $apropos;

    public $actus;
    public $urls;

    public function render()
    {
        $this->actus = Actu::all();
        $this->urls = liens::all(); 
        $this->apropos=apropo::all();
        return view('livewire.client.pages.v-d-apropos');
    }
}
