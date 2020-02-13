<?php


namespace GEG\view;

/**
 * Class VueFormulaireBesoin
 * @package GEG\view
 */
class VueFormulaireBesoin
{
    private $role,$idCreneaux;
    /**
     * VueFormulaireBesoin constructor.
     */
    public function __construct($idCrenaux,$role)
    {
        $this->idCreneaux=$idCrenaux;
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
<option value="$key">$besoin</option>

END;
        }
        $html.=<<<END
</select>
END;
        return $html;

    }

    /**
     * @return string
     */
    private function afficher(){
        return <<<END
<form action="ajoutBesoin/{$this->idCreneaux}" method="post" >
{$this->afficherChoixBesoins()}
<input type="int" name="qte" value="0" class="input_nbr" />
<input type="submit" value="Valider"  />
</form>
END;
}
    public function render(){
        $v= new VueGenerale();
        $v->render($this->afficher());
    }


}