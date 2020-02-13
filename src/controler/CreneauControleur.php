<?php

namespace GEG\controler;

use \Illuminate\Database\Capsule\Manager as DB;
use GEG\model\User;
use GEG\view\VueHome;
use GEG\view\VueAjouterCreneau;
use GEG\date;

class CreneauControleur
{
  public function afficher(){
    $a = new VueAjouterCreneau();
  	$a->render();
  }

  public function SaveCreneau($jour,$semaine,$heureD,$heureF){
    $c = new Creneau();
    $d = new Date();
    $res = $d->calc_date('2010-02-10',$semaine,$jour);
    $c->jour =$res['jour_nom'];
    $c->mois =$res['mois_nom'];
    $c->annee =$res['annee_no'];
    $c->debutHeure = $heureD;
    $c->finHeure = $heureF;
    $c->save();

  }
}
