<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\header;

class VHeader extends Component
{
    public $headers;

    public function render() 
    {
        $this->headers=header::all();
        return view('livewire.client.v-header');
    }
}
