<?php

namespace GEG\controler;


use \Illuminate\Database\Capsule\Manager as DB;
use GEG\model\User;
use GEG\view\VueHome;
use GEG\view\VueChoixCompteTest;

class ListUserControler
{
  public function getAllUser(){
    $res = User::select('id', 'nom')->get();
    $v = new VueChoixCompteTest($res);
    $v->render();
  }

}
