<?php


namespace GEG\view;

use GEG\model\Role;
/**
 * Class VueFormulaireBesoin
 * @package GEG\view
 */
class VueFormulaireBesoin
{
    private $role;
    /**
     * VueFormulaireBesoin constructor.
     */
    public function __construct($role)
    {
        $this->role=$role;
    }

    /**
     * @return array Liste de besoin
     */
    private function getBesoin(){
        $v=$this->role;
        $res=array();
        foreach ($v as $key => $val){
            $res[]=$val->label;
        }
        return $res;
    }
    private function afficherChoixBesoins(){
        $besoin=$this->getBesoin();
        $html=<<<END
    <select name="type">
        <option>Sélectionner un rôle</option>
END;
        foreach ($besoin as $key => $besoin) {
            $html .= <<<END
<option value="$besoin">$besoin</option>

END;
        }
        $html.=<<<END
</select>
END;
        return $html;

    }
    private function afficher(){
        $html=$this->afficherChoixBesoins();
        $html=<<<END
<form action="ajoutBesoin" method="post">
$html
<input type="int" name="qte" value="0" class="input_nbr" />
<input type="submit" value="Valider" />
</form>
END;

        return $html;
}
    public function render(){
        $v= new VueGenerale();
        $v->render(<<<END
    {$this->afficher()}
END
        );
    }


}