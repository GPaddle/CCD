<?php
namespace GEG\controler;

use GEG\model\Besoin;
use GEG\view\VueInscriptionBesoin;

class InscriptionBesoinControleur{

  public function renderForm($idCreneau)
	{
    $roles = Besoin::get()->where("id","=",$idCreneau);

    $vue = new VueInscriptionBesoin($roles);
    $vue->render();
  }

  public function ajouterBesoinInscription()
  {
    $besoinInscr = new InscriptionBesoin();

    $besoinInscr->idUser = $_SESSION['user']['id'];
    $besoin->idBesoin = $_POST['idBesoin'];

    $besoin->save();
  }




}
