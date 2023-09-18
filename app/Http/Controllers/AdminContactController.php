<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;

class AdminContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('admin_contact.index', compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'Nom' => 'required|max:255',
        //     'Prenom' => 'required',
        //     'Adresse_postale' => 'required',
        //     'Email' => 'required',
        //     'Numero_de_telephone' => 'required',
        //     'Date_de_naissance' => 'required',

        // ]);

        $validated = Validator::make($request->all(),[
            'Nom' => 'required',
            'Prenom' => 'required',
            'Adresse_postale' => 'required',
            'Email' => 'required',
            'Numero_de_telephone' => 'required',
            'Date_de_naissance' => 'required',

        ])->validate();

        // $validated = $validator->validate();

          Contact::create($validated);
          return redirect()->route('admin.contact.index')
            ->with('success','Le contact a bien été créé');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = Contact::find($id);
        return view('admin_contact.show', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
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
        return redirect()->route('admin.contact.index')
        ->with('success', 'La contact a bien été modifié.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('admin.contact.index')
          ->with('success', 'Le contact a bien été supprimé');
    }

    public function create()
    {
        return view('admin_contact.create');

    }

    public function edit(int $id)
    {
         $contact = Contact::find($id);
         return view('admin_contact.edit', compact('contact'));

    }
}



