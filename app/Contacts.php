<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
   public function comments(){
       return $this->hasMany('App\Comment');
   }
}
