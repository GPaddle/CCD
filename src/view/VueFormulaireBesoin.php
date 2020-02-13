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

    private function afficherChoixBesoins(){
        $html=<<<END
    <select name="idRole">
        <option>Sélectionner un rôle</option>
END;
        foreach ($this->role as $role) {
            $html .= <<<END
<option value="{$role->id}">{$role->label}</option>

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
<form action="{$this->idCreneaux}" method="post" >
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