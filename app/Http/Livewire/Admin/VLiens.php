<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\liens;

class VLiens extends Component
{
    public $selectedId;
    public $nom;
    public $url;
    public $lienss;

    public function render()
    {
        $this->lienss=liens::all();
        return view('livewire.admin.v-liens');
    }

    public function create()
    {
        $valider = $this->validate([
            'nom'=> 'required',
            'url'=> 'required',
        ]);
        liens::create($valider);
        $this->clear();
        $this->dispatchBrowserEvent('notify', ['titre' => 'Confirmation','message' => 'Enregistrement effectué', 'type' => 'success']);
    }

    public function clear()
    {
        $this->nom = "";
        $this->url= "";
        
        $this->selectedId = "";
    }

    public function selection($data)
    {
        $this->selectedId = $data["id"];
        $this->nom = $data["nom"];
        $this->url = $data["url"];
    }

    
    public function update()
    {
        $valider = $this->validate([
            'nom'=> 'required',
            'url'=> 'required',
        ]);
        $record=liens::find($this->selectedId);
        $record->update($valider);
        $this->dispatchBrowserEvent('notify', ['titre' => 'Confirmation','message' => 'Modification effectuée', 'type' => 'success']);
    }
    
    public function delete()
    {
        $valider = $this->validate([
            'nom'=> 'required',
            'url'=> 'required',
        ]);
        $record=liens::find($this->selectedId);
        $record->delete($valider);
        $this->dispatchBrowserEvent('notify', ['titre' => 'Confirmation','message' => 'Suppression effectuée', 'type' => 'success']);
    }
}
