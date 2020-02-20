<?php

namespace App\Http\Controllers;

use App\Contacts;
use App\Services\ContactsService;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function contacts(ContactsService $contactsService)
    {
        return $contactsService->listContacts();

        
    }

    public function contact($id){
        return Contacts::find($id);
        
    }
}
