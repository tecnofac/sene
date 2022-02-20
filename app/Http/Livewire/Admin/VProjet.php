<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\projet;

class VProjet extends Component
{
    public $selectedId;
    public $titre;
    public $sousTitre;
    public $description;
    public $projet;
    
    public function render()
    {
        $this->projet = projet::all();
        return view('livewire.admin.v-projet');
    }

    public function create()
    {
        $valider = $this->validate([
            'titre'=> 'required',
            'sousTitre'=> 'required',
            'description'=> 'required'
        ]);

        projet::create($valider);   
    }

    
    public function update()
    {
        $this->titre = "gogo";
        $this->description = "glod";
        $this->sousTitre = "gaga";
        $valider = $this->validate([
            'titre'=> 'required',
            'description'=> 'required',
            'sousTitre'=>'required'
        ]);
        $record=projet::find($this->selectedId);
        $record->update($valider);
    }
    
    public function delete()
    {
        $valider = $this->validate([
            'titre'=> 'required',
            'description'=> 'required',
            'sousTitre'=>'required'
        ]);
        $record=projet::find($this->selectedId);
        $record->delete($valider);
    }
}
