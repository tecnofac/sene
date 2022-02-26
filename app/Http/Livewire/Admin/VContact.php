<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Contact;

class VContact extends Component
{
    public $selectedId;
    public $type;
    public $contenu;
    public $icon;
    public $Contacts;

    public function render()
    {
        $this->Contacts=Contact::all();
        return view('livewire.admin.v-contact');
    }
    
    public function create()
    {
        $valider = $this->validate([
            'type'=> 'required',
            'contenu'=> 'required',
            'icon'=>'required'
        ]);
        
        Contact::create($valider);
        $this->clear();
        $this->dispatchBrowserEvent('notify', ['titre' => 'Confirmation','message' => 'Enregistrement effectué', 'type' => 'success']);
    }
    public function clear()
    {
        $this->type = "";
        $this->contenu = "";
        $this->icon = "";
    }

    public function selection($data)
    {
        $this->selectedId = $data["id"];
        $this->type = $data["type"];
        $this->contenu = $data["contenu"];
        $this->icon = $data["icon"];
    }


    public function update()
    {
       
        $valider = $this->validate([
            'type'=> 'required',
            'contenu'=> 'required',
            'icon'=>'required',
        ]);
        $record=Contact::find($this->selectedId);
        $record->update($valider);
        $this->dispatchBrowserEvent('notify', ['titre' => 'Confirmation','message' => 'Modification effectuée', 'type' => 'success']);
    }

    public function delete()
    {
        $valider = $this->validate([
            'type'=> 'required',
            'contenu'=> 'required',
            'icon'=>'required',
        ]);
        $record = Contact::find($this->selectedId);
        $record->delete();
        $this->dispatchBrowserEvent('notify', ['titre' => 'Confirmation','message' => 'Suppression effectuée', 'type' => 'success']);
    }
    
}
