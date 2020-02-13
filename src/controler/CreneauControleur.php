<?php

namespace GEG\controler;

use \Illuminate\Database\Capsule\Manager as DB;
use GEG\model\User;
use GEG\view\VueHome;
use GEG\view\VueAjouterCreneau;
use GEG\model\Creneau;

require_once "src/date.php";

class CreneauControleur
{
  public function afficher(){
    $a = new VueAjouterCreneau();
  	$a->render();
  }

  public function SaveCreneau(){
    $c = new Creneau();
    $c->jour = $_POST["Jour"];
    $c->semaine = $_POST["Semaine"];
    $c->cycle = $_POST["cycle"];
    $c->debutHeure = $_POST['HeureD'];
    $c->finHeure = $_POST['HeureF'];
    $c->save();

  }
}
