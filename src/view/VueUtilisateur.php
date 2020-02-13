<?php

namespace GEG\view;

use GEG\view\VueGenerale;

class VueUtilisateur
{
	public function render($user)
	{

		$nom = $user->nom;
		$id = $_SESSION['user']['id'];

		$html = <<<END
			Nom de l'utilisateur : $nom
			<br>
			Id de la session en cours : $id
END;

		$vGenerale = new VueGenerale();
		$vGenerale->render($html);
	}
}
