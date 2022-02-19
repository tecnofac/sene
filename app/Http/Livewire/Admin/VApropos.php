<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\apropo;

class VApropos extends Component
{
    public $selectedId;
    public $titre;
    public $description;
    public $apropo;

    public function render()
    {
        return view('livewire.admin.v-apropos');
    }

    public function create()
    {
        
    }

    public function update()
    {
        
    }
    public function delete()
    {

    }

}
