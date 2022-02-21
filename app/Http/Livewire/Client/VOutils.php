<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\outil;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class VOutils extends Component
{
    use WithFileUploads;
    public $selectedId;
    public $titre;
    public $sousTitre;
    public $description;
    public $photo;
    public $outils;

    public function render()
    {
        $this->outils = outil::all(); 
        return view('livewire.client.v-outils');
    }
}
