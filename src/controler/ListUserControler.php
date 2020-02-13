<?php

namespace GEG\controler;


use \Illuminate\Database\Capsule\Manager as DB;
use GEG\model\User;
use GEG\view\VueHome;

class ListUserControler
{

  public function getAllUser(){
    $v = User::select('id', 'nom')->get();
    return $v->toArray();
  }

}
