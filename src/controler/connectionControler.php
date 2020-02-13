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

        $nbHRestant = $user->dureePermanances();

        $v = new VueUtilisateur();
        $v->render($user,$nbHRestant);
    }
    public function seConnecter()
    {
        $v = new VueConnexion();
        $v->render();
    }
    public function authentifier()
    {
        $app = \Slim\Slim::getInstance();
        $id = $app->request()->params('id');
        $mdp = $app->request()->params('mdp');
        $retour = Authentification::authenticate($id, $mdp);
        if ($retour) {
            $app->redirectTo("route_home");
        } else {
            $app->redirectTo("connexion");
        }
    }
    public function inscrire()
    {
        $app = \Slim\Slim::getInstance();
        $nom = $app->request()->params('nom');
        $mdp = $app->request()->params('mdp');
        $mdp2 = $app->request()->params('mdp2');
        $mail = $app->request()->params('mail');
        $retour = Authentification::createUser($nom, $mdp, $mdp2, $mail);
        if ($retour == 1 && $retour == 2) {
            $app->redirectTo("route_home");
        } else {
            $app->redirectTo("inscrire");
        }
    }
    public function renderInscription()
    {
        $v = new VueInscription();
        $v->render();
    }

    public function deconnexion()
    {
        if (isset($_SESSION['user'])) {
            session_destroy();
        }
        $app = \Slim\Slim::getInstance();
        $app->redirectTo("route_home");
    }
    public function supprimer($idcompte)
    {
        User::find($idcompte)->delete();
        $app = \Slim\Slim::getInstance();
        $app->redirectTo("route_home");
    }
}
