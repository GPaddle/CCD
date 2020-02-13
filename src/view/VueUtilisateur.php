<?php

namespace GEG\view;

use GEG\view\VueGenerale;

class VueUtilisateur
{
	public function render($user,$duree)
	{

		$nom = $user->nom;
		$id = $user->id;

		$html = <<<END
			Nom de l'utilisateur : $nom
			<br>
			Id de la session en cours : $id
			<br>
			$duree
END;

		$vGenerale = new VueGenerale();
		$vGenerale->render($html);
	}
}
