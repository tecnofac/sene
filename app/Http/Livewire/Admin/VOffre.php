<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Offre;

class VOffre extends Component
{
    public $selectedId=1;
    public $titre='kkkk';
    public $description='oooooo';
    public $contacts='pppppp';
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
        }
    
    public function update()
    {
        $this->titre = "gogo";
        $this->description = "glod";
        $this->contacts = "joe";
           
        $valider = $this->validate([
            'titre'=> 'required',
            'description'=> 'required',
            'contacts'=>'required'
        ]);
    
        $record=Offre::find($this->selectedId);
        $record->update($valider);
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
    }
}
