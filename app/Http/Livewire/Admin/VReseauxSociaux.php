<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\reseaux;



class VReseauxSociaux extends Component
{
   
    public $selectedId;
    public $nom ;
    public $utilisateur;
    public $url;
    public $icon;
    public $reseaux;

    public function render()
    {
        $this->reseauxx= reseaux::all();
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

    public function clear()
    {
        $this->nom = "";
        $this->utilisateur = "";
        $this->url = "";
        $this->icon = "";
        $this->selectedId = "";
    }

    public function selection($data)
    {
        $this->selectedId = $data["id"];
        $this->nom = $data["nom"];
        $this->utilisateur= $data["utilisateur"];
        $this->url = $data["url"];
        $this->icon = $data["icon"];
    }


    
    public function update()
    {
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
