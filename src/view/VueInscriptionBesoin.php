<?php

namespace GEG\view;

/**
 * Class VueFormulaireBesoin
 * @package GEG\view
 */
class VueInscriptionBesoin
{
    private $role;
    /**
     * VueFormulaireBesoin constructor.
     */
    public function __construct($role)
    {
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
<form action=inscriptionBesoin" method="post" >
<label for='idBesoin'>
<span>Choix du role choisit :</span>
</label>
{$this->afficherChoixBesoins()}
END;
}
    public function render(){
        $v= new VueGenerale();
        $v->render($this->afficher());
    }


}
