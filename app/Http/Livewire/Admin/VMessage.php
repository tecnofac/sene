<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\messages;

class VMessage extends Component
{
    public $selectedId;
    public $nom;
    public $email;
    public $sujet;
    public $contenu;
    public $messagess;

    public function render()
    {
        $this->messagess=messages::all();
        
        return view('livewire.admin.v-message');
    }

    ## la fonction inserer les donnes à la base de donnée ##

    public function create()
    {
        $valider = $this->validate([
            'nom'=> 'required',
            'email'=> 'required',
            'sujet'=> 'required',
            'contenu'=>'required'
        ]);
        
        messages::create($valider);
    }

    ## la fonction modifier ##

    public function update()
    {
        $this->nom = "gogo";
        $this->email = "glod";
        $this->sujet = "gaga";
        $this->contenu = "glod";
       
        $valider = $this->validate([
            'nom'=> 'required',
            'email'=> 'required',
            'sujet'=>'required',
            'contenu'=>'required',
            'messages'=>'required'
        ]);
        $record=messages::find($this->selectedId);
        $record->update($valider);
    }

    ## la fonction supprimer ##

    public function delete()
    {
        $valider = $this->validate([
            'nom'=> 'required',
            'email'=> 'required',
            'sujet'=>'required',
            'contenu'=>'required',

        ]);
        $record = messages::find($this->selectedId);
        $record->delete();
    }
}
