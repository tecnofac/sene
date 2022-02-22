<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\Actu;

class VMedia extends Component
{
    public $actus;
    public $TYPE;
    public $sId;
    public $sUrl;

    public function render()
    {
        $this->actus=Actu::all();
        return view('livewire.client.v-media');
    }

    public function mount($type){
        $this->TYPE = $type;
    }

    public function selection($index, $url){
        $this->sId = $index;
        $this->sUrl = $url;
    }
}
