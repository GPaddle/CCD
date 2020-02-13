<?php

namespace GEG\controler;

use \Illuminate\Database\Capsule\Manager as DB;
use GEG\model\User;
use GEG\view\VueUtilisateur;


class connectionControler
{
    public function getUser($id)
    {
        $user = User::where('id','=',$id)->first();

        $v = new VueUtilisateur($user);
        $v->render();
    }
}
