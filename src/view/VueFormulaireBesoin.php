<?php


namespace GEG\view;


/**
 * Class VueFormulaireBesoin
 * @package GEG\view
 */
class VueFormulaireBesoin
{
    /**
     * VueFormulaireBesoin constructor.
     */
    public function __construct()
    {

    }

    /**
     * @return array Liste de besoin
     */
    private function getBesoin(){
        return array("Test");
    }
    private function afficherChoixBesoins(){
        $besoin=$this->getBesoin();
        $html=<<<END
    <select name="type">
        <option>Sélectionner un besoin</option>
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
    private function render(){
        $v= new VueGenerale();
        $v->render(<<<END
    {$this->afficherChoixBesoins()}
END
        );
    }


}