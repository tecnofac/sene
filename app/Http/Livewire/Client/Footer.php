<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\Contact;
use App\Models\liens;
use App\Models\reseaux;
class Footer extends Component
{
    public $contacts;
    public $urls;
    public $rxx;

    public function render()
    {
        $this->contacts = Contact::all();
        $this->urls = liens::all();
        $this->rxx = reseaux::all();
        return view('livewire.client.footer');
    }
}
