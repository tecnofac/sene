<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\reseaux;

class VReseauxSociaux extends Component
{
    public $selectedId;
    public $nom ='jjjjj';
    public $utilisateur= 'uuuuuu';
    public $url='hhhhhh';
    public $icon='mmmmmmm';
    public $reseaux;

    public function render()
    {
        $this->reseaux= reseaux::all();
        return view('livewire.admin.v-reseaux-sociaux');
    }
    public function create()
    {
        $valider = $this->validate([
            'nom'=> 'required',
            'utilisateur'=> 'required',
            'url'=> 'required',
            'icon'=>'required'
        ]);

        reseaux::create($valider);   
    }

    
    public function update()
    {
        $this->nom= "gogo";
        $this->utilisateur = "glod";
        $this->url = "gaga";
        $this->icon='jjjj';

        $valider = $this->validate([
            'nom'=> 'required',
            'utilisateur'=> 'required',
            'url'=> 'required',
            'icon'=>'required'
        ]);
        $record=reseaux::find($this->selectedId);
        $record->update($valider);
    }
    
    public function delete()
    {
        $valider = $this->validate([
            'nom'=> 'required',
            'utilisateur'=> 'required',
            'url'=> 'required',
            'icon'=>'required'
        ]);
        $record=reseaux::find($this->selectedId);
        $record->delete($valider);
    }
}
