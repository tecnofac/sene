<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Actu;

class VActu extends Component
{
    public $selectedId = 3;
    public $titre="hfhfhf";
    public $descrip="hfhfhf";
    public $url="hfhfhf";
    public $type="hfhfhf";
    public $actus;

    public function render()
    {
        $this->actus=Actu::all();
        
        return view('livewire.admin.v-actu');
    }

    ## la fonction inserer les donnes à la base de donnée ##

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

    ## la fonction modifier ##

    public function update()
    {
        $this->titre = "gogo";
        $this->descrip = "glod";
        $this->url = "gaga";
        $this->type = "glod";
        $valider = $this->validate([
            'titre'=> 'required',
            'descrip'=> 'required',
            'url'=>'required',
            'type'=>'required'
        ]);
        $record=Actu::find($this->selectedId);
        $record->update($valider);
    }

    ## la fonction supprimer ##

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
