<?php

namespace GEG\controler;

use GEG\view\VueConnexion;
use \Illuminate\Database\Capsule\Manager as DB;
use GEG\model\User;
use GEG\view\VueUtilisateur;


class connectionControler
{
    public function getUser($id)
    {
        $user = User::where('id', '=', $id)->first();

        $_SESSION['user']['id'] = $id;
        $_SESSION['user']['name'] = $user->nom;


        $v = new VueUtilisateur();
        $v->render($user);
    }
    public function seConnecter(){
        $v = new VueConnexion();
        $v->render();
    }
}
