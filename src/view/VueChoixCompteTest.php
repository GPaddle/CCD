<?php


namespace GEG\view;

/**
 * Class VueChoixCompteTest
 * @package GEG\view
 */
class VueChoixCompteTest
{
    /**
     * @var Le tableau : On choisira la structure du tableau pour la vue [0==>[lesvaleurs1],1==>[lesvaleur2]...]
     */
    private $tab;
    /**
     * VueChoixCompteTest constructor.
     * @param $tab Le tableau
     */
    public function __construct($tab){
        $this->tab;
}

    /**
     * Converti un tableau incompatible à la vue dans un tableau compatible
     * @param $tab Le tableau à convertir au cas où
     * @return mixed le tableau
     */
     private function convertirFormat($tab){
        return $tab; // Au cas où le tableau reçu serait incompatible à la vue faite
    }

    /**
     * Converti les valeurs en ligne html
     * @param $key Le numéro de la ligne ( 1,2...)
     * @param $v Les valeurs
     * @return string Les valeurs convertir en ligne
     */
    private function formatLigne($key,$v){
        $res=<<<END
<a href="$this->lien($key,$v)">
END;
        foreach ($v as $val){
            $res+=<<<END
| $val |
END;
        }
        $res+=<<<END
</a>
END;
        return $res;
    }
    private function convertirEnColonne($tab){
        return "";
    }
    /**
     * Transforme les valeurs en lien
     */
    private function lien($key,$v){
        return "#"; // a modif
    }

    /**
     * Donne l'affichage du tableau de la vue
     * @return string
     */
    public function afficher(){
        $res=$this->convertirEnColonne($this->tab);
        $tab=$this->convertirFormat($this->tab);
        foreach ($tab as $key => $v){
            $res+=$this->formatLigne($key,$v);
        }
        return $res;
    }

    public function render(){
      return "";
    }

}
