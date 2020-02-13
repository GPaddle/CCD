<?php

namespace GEG\controler;

use \Illuminate\Database\Capsule\Manager as DB;
use GEG\model\Liste;
use GEG\model\Item;
use GEG\view\VueHome;


class HomeControler
{
	/**
	 * Fonction permettant d'accéder au home.
	 *
	 * @param int $option Si le paramètre n'est pas renseigné il est égal à rien, dans le cas contraire il permet de modifier la vue home.
	 *
	 */
    public function getHome($option = "")
    {
        $v = new VueHome();
        $v->render($option);
    }
}
