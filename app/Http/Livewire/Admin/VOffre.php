<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Offre;

class VOffre extends Component
{
    public $selectedId;
    public $titre;
    public $description;
    public $contacts;
    public $offres;

    public function render()
    {
        $this->offres=Offre::all();
        return view('livewire.admin.v-offre');
    }
    public function create()
    {
        $valider = $this->validate([
            'titre'=>'required',
            'description'=>'required', 
            'contacts'=>'required'
        ]);
    
        Offre::create($valider);
        $this->clear();
        $this->dispatchBrowserEvent('notify', ['titre' => 'Confirmation','message' => 'Enregistrement effectué', 'type' => 'success']);
    }

    public function clear()
    {
        $this->titre = "";
        $this->description = "";
        $this->contacts = "";
        $this->selectedId = "";
    }

    public function selection($data)
    {
        $this->selectedId = $data["id"];
        $this->titre = $data["titre"];
        $this->description = $data["description"];
        $this->contacts = $data["contacts"];
    }
    
    public function update()
    {
        $valider = $this->validate([
            'titre'=> 'required',
            'description'=> 'required',
            'contacts'=>'required'
        ]);
    
        $record=Offre::find($this->selectedId);
        $record->update($valider);
        $this->dispatchBrowserEvent('notify', ['titre' => 'Confirmation','message' => 'Modification effectuée', 'type' => 'success']);
    }
        
    
    public function delete()
    {
        $valider = $this->validate([
            'titre'=> 'required',
            'description'=> 'required',
            'contacts'=>'required'
        ]);
        $record = Offre::find($this->selectedId);
        $record->delete();
        $this->dispatchBrowserEvent('notify', ['titre' => 'Confirmation','message' => 'Suppression effectuée', 'type' => 'success']);
    }
}
