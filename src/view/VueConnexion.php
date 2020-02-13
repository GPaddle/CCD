<?php

namespace GEG\view;

use GEG\view\VueGenerale;

class VueConnexion
{
	public function render()
	{

		$vGenerale = new VueGenerale();

		$html = <<<END
		<!DOCTYPE html>
		<html lang="fr">
			<head>
				<meta charset="utf-8">
				<title>Connexion</title>
			</head>
			<body>
				<h1>Connexion</h1>
				<form method="post" action="connexion">
					<label>Identifiant</label>
					<input type="text" name="id">
					<label>Mot de passe</label>
					<input type="password" name="mdp" >
					<input type="submit" value="Valider">
				</form>
			</body>
		</html>
END;

		$vGenerale->render($html);
	}
}