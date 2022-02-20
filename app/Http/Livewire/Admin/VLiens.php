<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\liens;

class VLiens extends Component
{
    public $selectedId=1;
    public $nom='kkkk';
    public $url='ppppp';
    public $liens;

    public function render()
    {
        $this->liens=liens::all();
        return view('livewire.admin.v-liens');
    }

    public function create()
    {
        $valider = $this->validate([
            'nom'=> 'required',
            'url'=> 'required',
        ]);
        liens::create($valider);
    }

    
    public function update()
    {
        $this->nom = "gogo";
        $this->url = "glod";
        $valider = $this->validate([
            'nom'=> 'required',
            'url'=> 'required',
        ]);
        $record=liens::find($this->selectedId);
        $record->update($valider);
    }
    
    public function delete()
    {
        $valider = $this->validate([
            'nom'=> 'required',
            'url'=> 'required',
        ]);
        $record=liens::find($this->selectedId);
        $record->delete($valider);
    }
}
