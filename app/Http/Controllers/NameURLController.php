<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameURLController extends Controller
{
    public function sayHello(Request $request){
    
        $name = $request->query('name');

        return view('name_url', ['name' => $name]);

    }
}
