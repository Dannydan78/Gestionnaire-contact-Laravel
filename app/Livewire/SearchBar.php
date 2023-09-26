<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;

class SearchBar extends Component
{

    public string $query = '';
    public $contacts = [];

    public function updatedQuery()
    {
        $words = '%' . $this->query . '%';

        if (strlen($this->query) > 2) {
            $this->contacts = Contact::where('Nom', 'like', $words)

            ->orWhere('Prenom', 'like', $words)
            ->get();
        }
        dd($this->contacts);

        }


    public function render()
    {
        return view('livewire.search-bar');
    }
}
