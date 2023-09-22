<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class FrontContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('front-contact', compact('contacts'));
    }
}
