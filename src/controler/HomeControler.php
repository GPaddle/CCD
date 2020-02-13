<?php

namespace GEG\controler;

use \Illuminate\Database\Capsule\Manager as DB;
use GEG\model\Liste;
use GEG\model\Item;
use GEG\view\VueHome;


class HomeControler
{
    public function getHome($option = "")
    {
        $v = new VueHome();
        $v->render($option);
    }
}
