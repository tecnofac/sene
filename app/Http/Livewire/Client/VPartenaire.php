<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\partenaire;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class VPartenaire extends Component
{
    use WithFileUploads;
    public $selectedId;
    public $nom;
    public $url;
    public $photo;
    public $partenaires;

    public function render()
    {
        $this->partenaires=partenaire::all();
        return view('livewire.client.v-partenaire');
    }
}
