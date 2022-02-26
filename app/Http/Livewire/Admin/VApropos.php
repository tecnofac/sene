<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\apropo;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class VApropos extends Component
{
    use WithFileUploads;
    
    public $selectedId;
    public $titre;
    public $description;
    public $photo;
    public $apropos;

    public function render() 
    {
        $this->apropos=apropo::all();
        return view('livewire.admin.v-apropos');
    }

    public function create()
    {
        $valider = $this->validate([
            'titre'=> 'required',
            'description'=> 'required', 
        ]);
        $record = apropo::create($valider);
        if(!empty($this->photo)){
            $this->photo->storeAs('public/apropos', $record->id.'.png');
        }
        $this->clear();
        $this->dispatchBrowserEvent('notify', ['titre' => 'Confirmation','message' => 'Enregistrement effectué', 'type' => 'success']);
    }
    public function clear()
    {
        $this->titre = "";
        $this->description = "";
        $this->selectedId = "";
    }

    public function selection($data)
    {
        $this->selectedId = $data["id"];
        $this->titre = $data["titre"];
        $this->description = $data["description"];
    }

    public function update()
    {
       
       
        $valider = $this->validate([
            'titre'=> 'required',
            'description'=> 'required'
        ]);

        $record=apropo::find($this->selectedId);
        $record->update($valider);
        if (!empty($this->photo)) {
            $this->photo->storeAs('public/apropos', $this->selectedId.'.png');
        }
        $this->dispatchBrowserEvent('notify', ['titre' => 'Confirmation','message' => 'Modification effectuée', 'type' => 'success']);
    }
    
    public function delete()
    {
        $valider = $this->validate([
            'titre'=> 'required',
            'description'=> 'required',
        ]);
        $record = apropo::find($this->selectedId);
        $record->delete();
        Storage::delete('public/apropos/'.$this->selectedId.'.png');
        $this->dispatchBrowserEvent('notify', ['titre' => 'Confirmation','message' => 'Suppression effectuée', 'type' => 'success']);
    }

}
