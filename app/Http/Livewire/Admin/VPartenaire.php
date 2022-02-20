<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\partenaire;

class VPartenaire extends Component
{
    public $selectedId;
    public $nom;
    public $url;
    public $partenaire;
    
    public function render()
    {
        $this->partenaire=partenaire::all();
        return view('livewire.admin.v-partenaire');
    }
    public function create()
    {
        $valider = $this->validate([
            'nom'=> 'required',
            'url'=>'required',
        ]);
        partenaire::create($valider);
    }

    
    public function update()
    {
        $this->nom = 'ppppp';
        $this->url='ooooo';

        $valider = $this->validate([
            'nom'=> 'required',
            'url'=>'required',
        ]);

        $record=partenaire::find($this->selectedId);
        $record->update($valider);
    }
    
    public function delete()
    {
        $valider = $this->validate([
            'nom'=> 'required',
            'url'=>'required',
        ]);
        $record=partenaire::find($this->selectedId);
        $record->delete($valider);
    }
}
