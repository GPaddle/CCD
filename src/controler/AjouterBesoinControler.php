<?php
	namespace GEG\controler;

	use GEG\model\Besoin;
    use GEG\view\VueFormulaireBesoin;
use GEG\model\Role;
	class AjouterBesoinControler {
		public function renderForm($idCreneau) {
			$roles = Role::select("label")->get();

			$vue = new VueFormulaireBesoin($idCreneau, $roles);
			$vue->render();
		}

		public function ajouterBesoin($idCreneau) {
			$besoin = new Besoin();

			$besoin->idCreneau = $idCreneau;
			$besoin->idRole = $_POST["idRole"];
			$besoin->qte = $_POST["qte"];

			$besoin->save();
		}
		public function supprimerBesoin($idCreneau){
            $besoin = Besoin::find($idCreneau);
            $besoin->delete();
        }
	}
?>