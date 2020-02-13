<?php

namespace GEG\view;

use GEG\view\VueGenerale;

class VueUtilisateur
{
	public function render($user)
	{

		$nom = $user->nom;
		$mail = $user->mail;
		$id = $_SESSION['user']['id'];
		$app = \Slim\Slim::getInstance();
		$urlHome = $app->urlFor('route_home');


		$html = <<<END
			<div class="container">
				<div class="row mt-5 shadow-sm" style="height: 100%; background-color: rgba(242,242,242,.8);">
					<div class="text-center w-100">
						<div class="container">
				      <h3 class="text-uppercase mt-2">Profil :</h3>
							<hr>
							<img class="img-profile rounded-circle h-50" src="{$urlHome}img/$id.jpg">
							<section class="text-center display-4"> $nom</div>
							<section class="text-center">$mail</div>
						</div>
					</div>
				</div>
			</div>

END;

		$vGenerale = new VueGenerale();
		$vGenerale->render($html);
	}
}
