<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Contact;

class VContact extends Component
{
    public $selectedId=1;
    public $type='kkkkk';
    public $contenu='oooo';
    public $icon='papa';
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
            'icon'=>'required',
        ]);
        Contact::create($valider);
    }

    public function update()
    {
        $this->type = "gogo";
        $this->contenu= "glod";
        $this->icon = "gaga";
        $valider = $this->validate([
            'type'=> 'required',
            'contenu'=> 'required',
            'icon'=>'required',
        ]);
        $record=Contact::find($this->selectedId);
        $record->update($valider);
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
    }
    
}
