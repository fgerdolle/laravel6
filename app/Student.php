<?php

namespace App;

class Student {

    public $firstName;

    public $lastName;

    public function __construct( $firstName , $lastName){

        $this->firstName = $firstName;

        $this->lastName = $lastName;
    }

}