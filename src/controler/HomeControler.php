<?php

namespace GEG\controler;

use \Illuminate\Database\Capsule\Manager as DB;
use GEG\model\Liste;
use GEG\model\Item;
use GEG\model\User;
use GEG\view\VueHome;
use GEG\model\Creneau;
use GEG\view\VuePrincipale;
use GEG\view\VueGenerale;
use Slim\Slim;

class HomeControler
{
	public function render()
	{
		$app = \Slim\Slim::getInstance();
		if (isset($_SESSION["user"])) {
		    try {
                $t = Creneau::orderBy("cycle")->orderBy("semaine")->orderBy("jour")->orderBy("debutHeure")->get();
                $v = new VuePrincipale($t);

                $user = User::select("isAdmin")->where("id", "=", $_SESSION["user"]["id"])->first();
                $v->render($user->isAdmin);
            }catch(\Exception $e){
		        session_destroy();
		        $app->redirectTo("route_home");
            }
		} else {
			$vGenerale = new VueGenerale();

			$urlModif = $app->urlFor('connexion');
			$urlModif2 = $app->urlFor('inscrire');
			$urlImg = $app->urlFor('route_home');

			$vGenerale->render("<img class='mx-auto d-block' style='width:50vh' src='{$urlImg}img/logo.svg'></img><br><div class='text-center'><a href={$urlModif} class='btn btn-primary ml-2 mr-2'>Connexion à la page</a><a href={$urlModif2} class='btn btn-primary ml-2 mr-2'>S'inscrire à la page</a></div>");
		}
	}
}
