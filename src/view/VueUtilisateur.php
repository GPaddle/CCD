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
			$nom
			<br>
			$id
END;

		$vGenerale = new VueGenerale();

		$vGenerale->render($html);
	}
}
