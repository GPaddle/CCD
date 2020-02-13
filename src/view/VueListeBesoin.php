<?php


namespace GEG\view;


class VueListeBesoin
{
    private $besoin;
    public function __construct($besoin)
    {
        $this->besoin=$besoin;
    }
    private function lien(){

    }
    private function afficher(){
        $html=<<<END
<div></div><div> Identifiant du crénaux</div><div>Rôle</div><div>Quantité</div></div>
END;
;
        foreach ($this->besoin as $key) {
            $html = <<<END
<div><div>$key->idCreneau</div><div>$key->idRole</div><div>$key->Quantité</div></div>
END;
        }
        return $html;

    }
    public function render(){
        $v= new VueGenerale();
        $v->render($this->afficher());
}
}