<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\projet;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;


class VProjet extends Component
{
   
    use WithFileUploads;
    public $selectedId;
    public $titre;
    public $sousTitre;
    public $description;
    public $photo;
    public $projets;
    
    public function render()
    {
        $this->projets = projet::all();
        return view('livewire.client.v-projet');
    }
}
