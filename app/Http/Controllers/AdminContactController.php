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
        $request->validate([
            'Nom' => 'required|max:255',
            'Prenom' => 'required',
            'Adresse postale' => 'required',
            'Adresse email' => 'required',
            'Numero de telephone'
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



