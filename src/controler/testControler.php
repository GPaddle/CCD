<?php

namespace GEG\controler;

use \Illuminate\Database\Capsule\Manager as DB;
use GEG\model\Liste;
use GEG\model\Item;
use GEG\view\VuePrincipaleTest;


class testControler
{
    public function afficher()
    {
        $v = new VuePrincipaleTest();
        $v->render();
    }
}
