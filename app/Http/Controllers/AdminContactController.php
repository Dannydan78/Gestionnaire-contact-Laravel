<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

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
        // dd($request);
        $request->validate([
            'Nom' => 'required|max:255',
            'Prenom' => 'required',
            'Adresse_postale' => 'required',
            'Email' => 'required',
            'Numero_de_telephone' => 'required',
            'Date_de_naissance' => 'required',

        ]);


          Contact::create($request->all());
          return redirect()->route('admin_contact.index')
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function create()
    {
        return view('admin_contact.create');

    }

    public function edit(string $id)
    {

    }
}



