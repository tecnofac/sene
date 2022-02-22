<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\partenaire;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;


class VPartenaire extends Component
{
    use WithFileUploads;
    public $selectedId;
    public $nom;
    public $url;
    public $photo;
    public $partenaires;
    
    public function render()
    {
        $this->partenaires=partenaire::all();
        return view('livewire.admin.v-partenaire');
    }
    public function create()
    {
        $valider = $this->validate([
            'nom'=> 'required',
            'url'=>'required',
        ]);
        $record = partenaire::create($valider);
        if(!empty($this->photo)){
            $this->photo->storeAs('public/partenaires', $record->id.'.png');
        }
        $this->clear();
    }

    public function clear()
    {
        $this->nom = "";
        $this->url = "";
        $this->photo = "";
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
            'url'=>'required',
        ]);

        $record=partenaire::find($this->selectedId);
        $record->update($valider);
        $record->update($valider);
        if (!empty($this->photo)) {
            $this->photo->storeAs('public/partenaires', $this->selectedId.'.png');
        }
    }
    
    public function delete()
    {
        $valider = $this->validate([
            'nom'=> 'required',
            'url'=>'required',
        ]);
        $record=partenaire::find($this->selectedId);
        $record->delete($valider);
        Storage::delete('public/partenaires/'.$this->selectedId.'.png');
    }
}
