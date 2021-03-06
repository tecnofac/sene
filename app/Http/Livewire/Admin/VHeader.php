<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\header;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class VHeader extends Component
{
    use WithFileUploads;
    public $selectedId;
    public $titre;
    public $Descrip;
    public $photo;
    public $headers;

    public function render()
    {
        $this->headers=header::all();
        return view('livewire.admin.v-header');
    }

    public function create()
    {
        $valider = $this->validate([
            'titre'=> 'required',
            'Descrip'=> 'required',
        ]);
        $record = header::create($valider);
        if(!empty($this->photo)){
            $this->photo->storeAs('public/headers', $record->id.'.png');
        }
        $this->clear();
        $this->dispatchBrowserEvent('notify', ['titre' => 'Confirmation','message' => 'Enregistrement effectué', 'type' => 'success']);
    }

    public function clear()
    {
        $this->titre = "";
        $this->Descrip = "";
        $this->photo = "";
        $this->selectedId = "";
    }

    public function selection($data)
    {
        $this->selectedId = $data["id"];
        $this->titre = $data["titre"];;
        $this->Descrip = $data["Descrip"];
    }


    
    public function update()
    {
    
        $valider = $this->validate([
            'titre'=> 'required',
            'Descrip'=> 'required',
        ]);
        $record=header::find($this->selectedId);
        $record->update($valider);
        if (!empty($this->photo)) {
            $this->photo->storeAs('public/headers', $this->selectedId.'.png');
        }
        $this->dispatchBrowserEvent('notify', ['titre' => 'Confirmation','message' => 'Modification effectuée', 'type' => 'success']);
    }
    
    public function delete()
    {
        $valider = $this->validate([
            'titre'=> 'required',
            'Descrip'=> 'required',
        ]);
        $record=header::find($this->selectedId);
        $record->delete($valider);
        //Storage::exists("public/apropos/".$aprop->id.".png")
        Storage::delete('public/headers/'.$this->selectedId.'.png');
        $this->dispatchBrowserEvent('notify', ['titre' => 'Confirmation','message' => 'Suppression effectuée', 'type' => 'success']);
    }
    
    
}
