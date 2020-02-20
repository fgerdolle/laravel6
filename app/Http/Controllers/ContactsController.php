<?php

namespace App\Http\Controllers;

use App\ContactID;
use App\Contacts;
use App\Services\ContactsService;
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
            'firstName' => 'bail|required|between:5,20|alpha',
            'lastName' => 'bail|required|between:5,20|alpha',
            'email' => 'bail|required|email',
            'password' => 'bail|required|between:5,20|alpha'
        ]);
        $contact = new \App\Contacts;
        $contact->firstName = $request->firstName;
        $contact->lastName = $request->lastName;
        $contact->email = $request->email;
        $contact->password = $request->password;
        $contact->save();
        return "C'est bien enregistré !";
    
    }

    public function List(ContactsService $contactsService)
    {
        $contacts = $contactsService->listContacts();

        return view('contactview', ['contacts' => $contacts]);
    }

    public function show($id){
        $contact = Contacts::find($id);
        return view('contactID', ['contact' => $contact]);
    }
}
