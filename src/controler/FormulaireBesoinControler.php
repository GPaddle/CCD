<?php

namespace GEG\controler;

use \Illuminate\Database\Capsule\Manager as DB;
use GEG\model\User;
use GEG\view\VueFormulaireBesoin;


class FormulaireBesoinControler
{
    public function afficher(){
        $v=new VueFormulaireBesoin();
        $v->render();
    }
}
