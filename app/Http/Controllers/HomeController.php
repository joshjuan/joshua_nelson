<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function contact()
    {
        $contacts = Contact::orderBy('id','desc')->paginate(10)->setPath('contacts');
        return view('index',compact(['contacts']));
    }
}
