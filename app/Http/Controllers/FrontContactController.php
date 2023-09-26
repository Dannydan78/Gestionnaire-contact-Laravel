<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;

class FrontContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::SimplePaginate(10);
        return view('front-contact', compact('contacts'));
    }

    public function destroy(int $id)
    {
        $contact = Contact::find($id);

        $contact->delete();
        request()->session()->flash('success', 'Le contact a bien été supprimé');
        return redirect()->route('front.contacts');
    }

    public function edit(int $id)
    {
         $contact = Contact::find($id);
         return view('front-edit', compact('contact'));

    }

    public function create()
    {
        return view('contact.create');

    }

    public function store(Request $request)
    {

            $validated = Validator::make($request->all(),[
            'Nom' => 'required',
            'Prenom' => 'required',
            'Adresse_postale' => 'required',
            'Email' => 'required',
            'Numero_de_telephone' => 'required',
            'Date_de_naissance' => 'required',

        ])->validate();



          Contact::create($validated);
          request()->session()->flash('success','Le contact a bien été créé');
          return redirect()->route('front.contacts');
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'Nom' => 'required',
            'Prenom' => 'required',
            'Adresse_postale' => 'required',
            'Email' => 'required',
            'Numero_de_telephone' => 'required',
            'Date_de_naissance' => 'required',
        ]);
        $contact = Contact::find($id);
        dd($request->all());
        $contact->update($request->all());
        request()->session()->flash('success', 'La contact a bien été modifié.');
        return redirect()->route('front.contacts');
    }
 }
