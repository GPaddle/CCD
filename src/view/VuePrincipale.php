<?php

namespace GEG\view;
class VuePrincipale
{

  private $t;

  public function __construct($tab){
    $this->t = $tab;
  }


	public function render($isAdmin)
	{
    if($isAdmin) {
      $adminButtons = <<<END
<a href="ajouterCreneau" class="btn btn-primary">Ajouter un créneau</a>
<a href="ajouterCreneau" class="btn btn-primary">Inscrire un utilisateur</a>
END;
    } else {
      $adminButtons = "";
    }

		$vGenerale = new VueGenerale();
    $html = "oui";
    $content ="";
    $besoins = "";
    foreach ($this->t as $value) {
      $id = $value[0]->id;
      foreach ($value[1] as $v) {
        $besoins .="<li>$v->label</li>";
      }

      $content .= <<<END
  <div id="crenau-1">
    <span>{$value[0]->debutHeure}h à {$value[0]->finHeure}h | Jour : {$value[0]->jour} | Semaine : {$value[0]->semaine} | Cycle : {$value[0]->cycle}</span>
    <span class='ml-5'>1 / 6</span>
    <button type="button" class="float-right btn btn-danger" data-target="#creneau$id" data-toggle="modal">Modifier</button>
    <hr>
  </div>

  <div class="modal fade" id="creneau$id" tabindex="-1" role="dialog" aria-labelledby="creneauLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="creneauLabel">Modifier créneau de {$value[0]->debutHeure}h à {$value[0]->finHeure}h | Jour : {$value[0]->jour} | Semaine : {$value[0]->semaine} | Cycle : {$value[0]->cycle}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <ul>
            $besoins
          </ul>
          <a href="ajouterBesoin/$id" class="btn btn-success">Ajouter un besoin</a>
        </div>
      </div>
    </div>
  </div>
END;
    }
    $html = <<<END
    <section>
    <div class="container">
      <div class="row mt-5 shadow-sm " style="height: 100%; background-color: rgba(242,242,242,.8);">
        <div class="container">
          <div class="text-center w-100">
            <h3 class="text-uppercase mt-2">Créneaux :</h3>
            $adminButtons
          </div>
          <hr>
          $content
        </div>
      </div>
    </div>
  </section>
END;
		$vGenerale->render($html);
	}
}
