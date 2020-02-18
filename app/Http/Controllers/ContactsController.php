<?php

namespace App\Http\Controllers;

use App\ContactID;
use App\Contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ContactsController extends Controller
{
    public function create()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'bail|required|between:5,20|alpha',
            'email' => 'bail|required|email',
            'phone' => 'bail|required|between:5,20',
            'adress' => 'bail|required|max:500'
        ]);
        $contact = new \App\Contacts;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->adress = $request->adress;
        $contact->save();
        return "C'est bien enregistré !";
    
    }

    public function List()
    {
        $contacts = Contacts::all();

        return view('contactview', ['contacts' => $contacts]);
    }

    public function show($id){
        $contact = Contacts::find($id);
        return view('contactID', ['contact' => $contact]);
    }
}
