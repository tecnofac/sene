<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\outil;

class VOutil extends Component
{
    //titre', 'sous-titre', '
    public $selectedId=1;
    public $titre='kkkk';
    public $sousTitre='ppppp';
    public $description = 'iiiii';
    public $outil;
    
    public function render()
    {
        $this->outil = outil::all();
        return view('livewire.admin.v-outil');
    }

    public function create()
    {
        $valider = $this->validate([
            'titre'=> 'required',
            'sousTitre'=> 'required',
            'description'=> 'required',
        ]);

        outil::create($valider);
    }

    
    public function update()
    {
        $this->titre = 'le nouveau';
        $this->sousTitre = 'la vie';
        $this->description ='mmmmm';

        $valider = $this->validate([
            'titre'=> 'required',
            'sousTitre'=> 'required',
            'description'=> 'required',
        ]);

        $record=outil::find($this->selectedId);
        $record->update($valider);

    }
    
    public function delete()
    {

        $valider = $this->validate([
            'titre'=> 'required',
            'sousTitre'=> 'required',
            'description'=> 'required',
        ]);
        $record = outil::find($this->selectedId);
        $record->delete();
    }
}
