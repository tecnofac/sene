<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\projet;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;


class VProjet extends Component
{
    use WithFileUploads;
    public $selectedId;
    public $titre;
    public $sousTitre;
    public $description;
    public $photo;
    public $projets;
    
    public function render()
    {
        $this->projets = projet::all();
        return view('livewire.admin.v-projet');
    }

    public function create()
    {
        $valider = $this->validate([
            'titre'=> 'required',
            'sousTitre'=> 'required',
            'description'=> 'required',
        ]);

        $record = projet::create($valider);
        $this->photo->storeAs('public/actus/', $record->id.'.png');
        $this->clear();
    }

    public function clear()
    {
        $this->titre = "";
        $this->sousTitre = "";
        $this->photo = "";
        $this->selectedId = "";
    }

    public function selection($data)
    {
        $this->selectedId = $data["id"];
        $this->titre = $data["titre"];;
        $this->sousTitre= $data["sousTitre"];
        $this->description = $data["description"];
    }
    
    public function update()
    {
        $valider = $this->validate([
            'titre'=> 'required',
            'sousTitre'=> 'required',
            'description'=> 'required',
        ]);

        $record=projet::find($this->selectedId);
        $record->update($valider);
        $record->update($valider);
        if (!empty($this->photo)) {
            $this->photo->storeAs('public/actus/', $this->selectedId.'.png');
        }

    }
    
    public function delete()
    {

        $valider = $this->validate([
            'titre'=> 'required',
            'sousTitre'=> 'required',
            'description'=> 'required',
        ]);
        $record = projet::find($this->selectedId);
        $record->delete();
        Storage::delete('public/actus/'.$this->selectedId.'.png');
    }
}
