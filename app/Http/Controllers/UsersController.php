<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create()
    {
        return view('info');
    }
 
    public function store(Request $request)
    {
        $name = $request->input('name');
        return view('create_user_confirm', compact('name')); // compact est un raccourci à 'name'=> $name
    }
}
