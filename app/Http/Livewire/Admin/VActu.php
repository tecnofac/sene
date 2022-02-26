<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Actu;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class VActu extends Component
{
    use WithFileUploads;
    public $selectedId;
    public $titre;
    public $descrip;
    public $url;
    public $type;
    public $photo;
    public $actus;

    public function render()
    {
        $this->actus=Actu::all();
        
        return view('livewire.admin.v-actu');
    }

    ## la fonction inserer les donnes à la base de donnée ##

    public function create()
    {
        $valider = $this->validate([
            'titre'=> 'required',
            'descrip'=> 'required',
            'url'=>'required',
            'type'=>'required'
        ]);
        $record = Actu::create($valider);
        $this->photo->storeAs('public/actus', $record->id.'.png');
        $this->clear();
        $this->dispatchBrowserEvent('notify', ['titre' => 'Confirmation','message' => 'Enregistrement effectué', 'type' => 'success']);
    }

    public function clear()
    {
        $this->titre = "";
        $this->descrip = "";
        $this->url = "";
        $this->type = "";
        $this->photo = "";
        $this->selectedId = "";
    }

    public function selection($data)
    {
        $this->selectedId = $data["id"];
        $this->titre = $data["titre"];;
        $this->descrip = $data["descrip"];
        $this->url = $data["url"];;
        $this->type = $data["type"];
    }

    ## la fonction modifier ##

    public function update()
    {
        
        $valider = $this->validate([
            'titre'=> 'required',
            'descrip'=> 'required',
            'url'=>'required',
            'type'=>'required'
        ]);
        $record=Actu::find($this->selectedId);
        $record->update($valider);
        if (!empty($this->photo)) {
            $this->photo->storeAs('public/actus', $this->selectedId.'.png');
        }
        $this->dispatchBrowserEvent('notify', ['titre' => 'Confirmation','message' => 'Modification effectuée', 'type' => 'success']);

    }

    ## la fonction supprimer ##

    public function delete()
    {
        $valider = $this->validate([
            'titre'=> 'required',
            'descrip'=> 'required',
            'url'=>'required',
            'type'=>'required'
        ]);
        $record = Actu::find($this->selectedId);
        $record->delete();
        Storage::delete('public/actus/'.$this->selectedId.'.png');
        $this->dispatchBrowserEvent('notify', ['titre' => 'Confirmation','message' => 'Suppression effectuée', 'type' => 'success']);
    }

    
}
