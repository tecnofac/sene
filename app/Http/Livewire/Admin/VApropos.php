<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\apropo;

class VApropos extends Component
{
    public $selectedId=1;
    public $titre='kkkk';
    public $description='oooooo';
    public $apropo='pppppp';

    public function render()
    {
        $this->apropos=apropo::all();
        return view('livewire.admin.v-apropos');
    }

    public function create()
    {
        $valider = $this->validate([
            'titre'=> 'required',
            'description'=> 'required', 
        ]);
        apropo::create($valider);
    }

    public function update()
    {
        $this->titre = "gogo";
        $this->description = "glod";
       
        $valider = $this->validate([
            'titre'=> 'required',
            'description'=> 'required',
        ]);

        $record=apropo::find($this->selectedId);
        $record->update($valider);
    }
    
    public function delete()
    {
        $valider = $this->validate([
            'titre'=> 'required',
            'description'=> 'required',
        ]);
        $record = apropo::find($this->selectedId);
        $record->delete();
    }

}