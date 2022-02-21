<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\apropo;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class VAproposHome extends Component
{
    use WithFileUploads;
    public $selectedId;
    public $titre;
    public $description;
    public $photo;
    public $apropos;

    public function render()
    {
        $this->apropos=apropo::all();
        return view('livewire.client.v-apropos-home');
    }
}
