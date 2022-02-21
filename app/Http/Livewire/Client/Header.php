<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class Header extends Component
{
    use WithFileUploads;
    public $selectedId;
    public $titre;
    public $Descrip;
    public $photo;
    public $headers;

    public function render()
    {
        $this->headers=header::all();
        return view('livewire.client.header');
    }
}
