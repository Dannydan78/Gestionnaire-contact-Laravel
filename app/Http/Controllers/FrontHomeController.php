<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class FrontHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // User::create([
        //     'name' => 'Redha',
        //     'email' => 'red@gmail.com',
        //     'password' => 'test1',
        // ]);

        $contacts = Contact::SimplePaginate(1);
        return view('home', compact('contacts'));

    }

    public function showContact(string $id)
    {

        $contact = Contact::find($id);

        if (!$contact) {

        }

        return view('contact', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = Contact::find($id);
        return view('home', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
}
