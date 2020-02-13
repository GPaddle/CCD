<?php
namespace GEG\controler;

use GEG\model\Besoin;
use GEG\view\VueInscriptionBesoin;
use GEG\model\InscriptionBesoin;
use GEG\model\Role;

class InscriptionBesoinControler{

  public function ajouterBesoinInscription($idBesoin)
  {
    $besoinInscr = new InscriptionBesoin();

    $besoinInscr->idUser = $_SESSION['user']['id'];
    $besoinInscr->idBesoin = $idBesoin;

    $besoinInscr->save();
  }




}
