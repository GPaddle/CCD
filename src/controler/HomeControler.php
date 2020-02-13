<?php

namespace GEG\controler;

use \Illuminate\Database\Capsule\Manager as DB;
use GEG\model\Liste;
use GEG\model\Item;
use GEG\view\VueHome;
use GEG\model\Creneau;
use GEG\view\VuePrincipale;
use GEG\view\VueGenerale;

class HomeControler
{
	public function render()
	{
		$app = \Slim\Slim::getInstance();
		if (isset($_SESSION["user"])) {
			$t = Creneau::orderBy("cycle")->orderBy("semaine")->orderBy("jour")->orderBy("debutHeure")->get();
			$v = new VuePrincipale($t);
			$v->render();
		} else {
			$vGenerale = new VueGenerale();

			$urlModif = $app->urlFor('connexion');
			$urlModif2 = $app->urlFor('inscrire');
			$urlImg = $app->urlFor('route_home');

			$vGenerale->render("<img style='width:30vh' src='{$urlImg}img/logo.svg'></img><br><a href={$urlModif}>Connexion à la page</a><br><a href={$urlModif2}>S'inscrire à la page</a>");
		}
	}
}
