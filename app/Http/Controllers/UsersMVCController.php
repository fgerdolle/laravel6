<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersMVCController extends Controller
{
    public function UsersList()
    {
        $users = DB::select('select id, firstName, lastName from users order by id');

        return view('userMVC', ['users' => $users]);
    }

    public function show($id){
        $user = DB::table('users')->where('id',$id)->first();
        return view('userIDMVC', ['user' => $user]);
    }
}
