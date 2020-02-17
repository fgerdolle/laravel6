<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function sayHello(Request $request, $name){

        $request->session()->put('name', $name);
        return view('session');
    }
}
