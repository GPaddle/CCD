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
				<!--<h1>$err</h1>
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
				</form>--->
				<h1 class='text-center'>$err</h1>
					<div class='container'>
					<div class='row '>
					<div class='mx-auto'>
						<form method="post" action="inscrire" class='text-center'>
							<div class='text-center'>
								<div class="input-group mb-3">
								 	<div class="input-group-prepend">
								    	<span class="input-group-text" id="basic-addon1">Identifiant</span>
								  	</div>
								  	<input type="text" class="form-control" placeholder="Identifiant" name="nom">
								</div>
								<div class="input-group mb-3">
								 	<div class="input-group-prepend">
								    	<span class="input-group-text" id="basic-addon1">Mail</span>
								  	</div>
								  	<input type="text" class="form-control" placeholder="Mail" name="mail">
								</div>
								<div class="input-group mb-3">
								 	<div class="input-group-prepend">
								    	<span class="input-group-text" id="basic-addon1">Mot de passe</span>
								  	</div>
								  	<input type="password" class="form-control" placeholder="Mot de passe" name="mdp">
								</div>
								<div class="input-group mb-3">
								 	<div class="input-group-prepend">
								    	<span class="input-group-text" id="basic-addon1">Ressaisir le Mot de passe</span>
								  	</div>
								  	<input type="password" class="form-control" placeholder="Mot de passe" name="mdp2">
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
END;

        $vGenerale->render($html);
    }
}