<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Controller\ContainerControllerResolver;

class AdminHomeController extends Controller
{
    public function index() {
        $contacts = Contact::all();
       return view ('admin-home', compact('contacts'));
    }
}
