<?php

namespace GEG\view;

class VueUtilisateur
{
	public function render($user){
		echo $user->nom;

		if (isset($_SESSION['user'])) {
			echo ("<br>");
            echo ($_SESSION['user']['id']);
        }
	}
}