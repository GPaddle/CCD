<?php


namespace GEG\controler;

use GEG\view\VueConnexion;
use \Illuminate\Database\Capsule\Manager as DB;
use GEG\model\User;
use GEG\view\VueUtilisateur;
use GEG\auth\Authentification;
use GEG\view\VueInscription;
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
    public function authentifier(){
        $app=$app = \Slim\Slim::getInstance();
        $id=$app->request()->params('id');
        $mdp=$app->request()->params('mdp');
        Authentification::authenticate($id,$mdp);
    }
    public function inscrire(){
        $app=$app = \Slim\Slim::getInstance();
        $nom=$app->request()->params('nom');
        $mdp=$app->request()->params('mdp');
        $mdp2=$app->request()->params('mdp2');
        $mail=$app->request()->params('mail');
        Authentification::createUser($nom,$mdp,$mdp2,$mail);
    }
    public function renderInscription(){
        $v=new VueInscription();
        $v->render();
    }
}
