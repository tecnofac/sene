<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\header;

class VHeader extends Component
{
    public $selectedId;
    public $titre='kkkk';
    public $Descrip='ppppp';
    public $headers;

    public function render()
    {
        $this->headers=header::all();
        return view('livewire.admin.v-header');
    }

    public function create()
    {
        $valider = $this->validate([
            'titre'=> 'required',
            'Descrip'=> 'required',
        ]);
        header::create($valider);
    }

    
    public function update()
    {
        $this->titre = "gogo";
        $this->Descrip = "glod";
        $valider = $this->validate([
            'titre'=> 'required',
            'Descrip'=> 'required',
        ]);
        $record=header::find($this->selectedId);
        $record->update($valider);
    }
    
    public function delete()
    {
        $valider = $this->validate([
            'titre'=> 'required',
            'Descrip'=> 'required',
        ]);
        $record=header::find($this->selectedId);
        $record->delete($valider);
    }
    
    
}
