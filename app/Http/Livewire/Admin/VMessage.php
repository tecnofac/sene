<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\messages;

class VMessage extends Component
{
    public $selectedId;
    public $nom ;
    public $email;
    public $sujet;
    public $contenu ;
    public $messagess;

    public function render()
    {
        $this->messagess=messages::all();
        
        return view('livewire.admin.v-message');
    }

    public function delete($_id)
    {
        $record = messages::find($_id);
        $record->delete();
        $this->dispatchBrowserEvent('notify', ['titre' => 'Confirmation','message' => 'Suppresssion effectuée', 'type' => 'success']);
    }

    ## la fonction inserer les donnes à la base de donnée ##

    
}
