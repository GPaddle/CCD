<?php

namespace GEG\controler;

use \Illuminate\Database\Capsule\Manager as DB;
use GEG\model\Liste;
use GEG\model\Item;
use GEG\view\VueHome;
use GEG\model\Creneau;
use GEG\view\VuePrincipale;
use GEG\view\VueGenerale;

class HomeControler {
    public function render($app) {
    	if(isset($_SESSION["user"])) {
    		$t = Creneau::orderBy("cycle")->orderBy("semaine")->orderBy("jour")->orderBy("debutHeure")->get();
		    $v = new VuePrincipale($t);
		    $v->render();
    	} else {
    		$vGenerale = new VueGenerale();
    		$vGenerale->render("<a href={$app->urlFor('connexion')}>Connexion à la page</a><br><a href={$app->urlFor('inscrire')}>S'inscrire à la page</a>");
    	}
    }
}
