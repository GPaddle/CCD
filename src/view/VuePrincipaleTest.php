<?php

namespace GEG\view;
class VuePrincipaleTest
{

  private $t;

  public function __construct($tab){
    $this->t = $tab;
  }


	public function render()
	{
		$vGenerale = new VueGenerale();
    $html = "oui";
    $content ="";
    foreach ($this->t as $value) {
      $id = $value->id;

      $content .= <<<END
  <div id="crenau-1">
    <span>$value->debutHeure -> $value->finHeure | $value->jour | $value->semaine | $value->cycle</span>
    <button type="button" class="float-right btn btn-danger" data-target="#creneau1" data-toggle="modal">Modifier</button>
    <hr>
  </div>

  <div class="modal fade" id="creneau$id" tabindex="-1" role="dialog" aria-labelledby="creneauLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="creneauLabel">Modifier créneau du $value->debutHeure -> $value->finHeure | $value->jour | $value->semaine | $value->cycle</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <a href="/ajouterBesoin" class="btn btn-success">Ajouter un besoin</a>
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
              <a href="ajouterCreneau/" class="btn btn-primary">Ajouter un créneau</a>
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
