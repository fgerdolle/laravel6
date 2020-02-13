<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller {

   public function index($firstName,$lastName)
    {
        $student = new Student($firstName,$lastName);

        return view('student', ['student'=> $student]);
    }

}
