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
  	$res = calc_date('2010-02-10',$_POST['Semaine'],(int)$_POST['Jour']);
    $c->jour =$res->jour_nom;
    $c->mois =$res->mois_nom;
    $c->annee =$res->annee_no;
    $c->debutHeure = $_POST['HeureD'];
    $c->finHeure = $_POST['HeureF'];
    $c->save();

  }
}
