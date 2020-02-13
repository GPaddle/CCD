<?php
	namespace GEG\controler;

	use GEG\view\VueFormulaireBesoin;

	class AjouterBesoinControler {
		public function renderForm() {
			$vue = new VueFormulaireBesoin();
			$vue->render();
		}

		public function ajouterBesoin($idCreneau) {
			$besoin = new Besoin();

			$besoin->idCreneau = $idCreneau;
			$besoin->idRole = $_POST["idRole"];
			$besoin->qte = $_POST["qte"];

			$besoin->save();
		}
	}
?>