<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Actu;

class VActu extends Component
{
    public $selectedId;
    public $titre;
    public $descrip;
    public $url;
    public $type;
    public $actus;

    public function render()
    {
        $this->actus=Actu::all();
        
        return view('livewire.admin.v-actu');
    }

    public function create()
    {
        $valider = $this->validate([
            'titre'=> 'required',
            'descrip'=> 'required',
            'url'=>'required',
            'type'=>'required'
        ]);
        Actu::create($valider);
    }

    
    public function update()
    {
        $valider = $this->validate([
            'titre'=> 'required',
            'descrip'=> 'required',
            'url'=>'required',
            'type'=>'required'
        ]);
        $record=Actu::find($this->selectedId);
        $record->update($valider);
    }
    public function delete()
    {
        $valider = $this->validate([
            'titre'=> 'required',
            'descrip'=> 'required',
            'url'=>'required',
            'type'=>'required'
        ]);
        $record = Actu::find($this->selectedId);
        $record->delete();
    }

    
}
