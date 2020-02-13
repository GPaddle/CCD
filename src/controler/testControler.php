<?php

namespace GEG\controler;

use \Illuminate\Database\Capsule\Manager as DB;
use GEG\model\Liste;
use GEG\model\Item;
use GEG\model\Creneau;
use GEG\view\VuePrincipaleTest;


class testControler
{
    public function afficher()
    {
      $t = Creneau::all();
      $v = new VuePrincipaleTest($t);
      $v->render();
    }
}
