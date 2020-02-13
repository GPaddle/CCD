<?php

namespace GEG\view;

use GEG\view\VueGenerale;

class VueInscription
{
    public function render()
    {

        $vGenerale = new VueGenerale();
        $err="Inscription";
        if (isset($_COOKIE["err2"])){
            $err=unserialize($_COOKIE["err2"]);
        }
        $html = <<<END
			<body>
				<h1>$err</h1>
				<form method="post" action="inscrire">
					<label>Identifiant</label>
					<input type="text" name="nom">
					<label>Mail</label>
					<input type="mail" name="mail" >
					<label>Mot de passe</label>
					<input type="password" name="mdp" >
					<label>Resaisir le Mot de passe</label>
					<input type="password" name="mdp2" >
					<input type="submit" value="Valider">
				</form>
			</body>
END;

        $vGenerale->render($html);
    }
}