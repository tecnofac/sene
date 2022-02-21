<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\Actu;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class VActu extends Component
{
    use WithFileUploads;
    public $selectedId;
    public $titre;
    public $descrip;
    public $url;
    public $type;
    public $photo;
    public $actus;

    public function render()
    {
        $this->actus=Actu::all();
        return view('livewire.client.v-actu');
    }
}
