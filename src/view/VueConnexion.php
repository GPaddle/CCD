<?php

namespace GEG\view;

use GEG\view\VueGenerale;

class VueConnexion
{
	public function render()
	{

		$vGenerale = new VueGenerale();
		$err="Connexion";
		if (isset($_COOKIE["err"])){
		    $err=unserialize($_COOKIE["err"]);
        }
		$html = <<<END
		<!DOCTYPE html>
		<html lang="fr">
			<head>
				<meta charset="utf-8">
				<title>Connexion</title>
			</head>
			<body>
					<h1 class='text-center'>$err</h1>
					<div class='container'>
					<div class='row '>
					<div class='mx-auto'>
						<form method="post" action="connexion" class='text-center'>
							<div class='text-center'>
								<div class="input-group mb-3">
								 	<div class="input-group-prepend">
								    	<span class="input-group-text" id="basic-addon1">Identifiant</span>
								  	</div>
								  	<input type="text" class="form-control" placeholder="Identifiant" name="id">
								</div>
								<div class="input-group mb-3">
								 	<div class="input-group-prepend">
								    	<span class="input-group-text" id="basic-addon1">Mot de passe</span>
								  	</div>
								  	<input type="password" class="form-control" placeholder="Mot de passe" name="mdp">
								</div>
							</div>
							<div class='text-center mx-auto'>
								<input type="submit" value="Valider" class='btn btn-primary '>
							</div>
						</form>
					</div>
					</div>
					</div>
			</body>
		</html>
END;

		$vGenerale->render($html);
	}
}
