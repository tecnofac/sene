<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\messages;


class VPrendreContact extends Component
{
    public $selectedId;
    public $nom;
    public $email;
    public $sujet;
    public $contenu ;
    public $messagess;

    public function render()
    {
        $this->messagess = messages::all();
        return view('livewire.client.v-prendre-contact');
    }

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
       
        $valider = $this->validate([
            'nom'=> 'required',
            'email'=> 'required',
            'sujet'=>'required',
            'contenu'=>'required'
            //'messages'=>'required'
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
            'contenu'=>'required'

        ]);
        $record = messages::find($this->selectedId);
        $record->delete();
    }


}
