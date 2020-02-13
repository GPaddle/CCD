<?php

namespace GEG\controler;


use \Illuminate\Database\Capsule\Manager as DB;
use GEG\model\User;
use GEG\view\VueHome;
use GEG\view\VueAjouterCreneau;

class CreneauControleur
{
  public function afficher(){
    $a = new VueAjouterCreneau();
  	$a->render();
  }

  public function SaveCreneau($jour,$semaine,$heureD,$heureF){
    
  }
}
