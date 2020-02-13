<?php

namespace GEG\controler;


use \Illuminate\Database\Capsule\Manager as DB;
use GEG\model\Liste;
use GEG\model\Item;
use GEG\view\VueHome;

class ListUserControler
{

  public function getAllUser(){
    $v = User::select('id', 'nom')->all();
    return $v->toArray();
  }

}
