<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;

class SearchBar extends Component
{

   public string $search = ''; // est utilisée pour stocker la valeur de la recherche entrée par l'utilisateur

   protected $queryString = ['search']; //Permet de synchronise la propriété search avec l'URL


    public function render()
    {

        return view('livewire.search-bar', [
            'contacts' => Contact::where(function ($query) {
                $query->where('Nom',  'like' , '%' . $this->search . '%')
                    ->orWhere('Prenom', 'like', '%' . $this->search . '%');
            })->get(),
        ]);

    }





}

