<?php
namespace App\Services;

use App\Contacts;

class ContactsService{

    public function listContacts(){
        return Contacts::all();
    }
}
