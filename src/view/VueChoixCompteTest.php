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
    public function __construct($tab)
    {
        $this->tab = $tab;
    }

    /**
     * Converti un tableau incompatible à la vue dans un tableau compatible
     * @param $tab Le tableau à convertir au cas où
     * @return mixed le tableau
     */
    private function convertirFormatTab($tab)
    {
        $res = array();
        foreach ($tab as $ligne) {
            $res[] = array($ligne->nom);
        }
        return $res;
    }

    /**
     * Converti les valeurs en ligne html
     * @param $key Le numéro de la ligne ( 1,2...)
     * @param $v Les valeurs
     * @return string Les valeurs convertir en ligne
     */
    private function formatLigne($key, $v)
    {
        $res = <<<END
<div id="ligne"><a href="{$this->lien($key,$v)}">
END;
        foreach ($v as $val => $val2) {
            $res = <<<END
$res
<div>$val2</div>
END;
        }
        $res = <<<END
$res
</a></div>
END;
        return $res;
    }
    private function rechercherColone($tab)
    {

        return <<<END
<div id="ligne"><div>Nom</div></div>
END;
    }
    /**
     * Transforme les valeurs en lien
     */
    private function lien($key, $v)
    {
        $app = \Slim\Slim::getInstance();
        $urlModif = $app->urlFor('route_loginTest', ['id' => $v[0]]);
        return $urlModif;
    }

    /**
     * Donne l'affichage du tableau de la vue
     * @return string
     */
    public function afficher()
    {
        $res = $this->rechercherColone($this->tab);
        $tab = $this->convertirFormatTab($this->tab);
        foreach ($tab as $key => $v) {
            $res = <<<END
$res
{$this->formatLigne($key,$v)}
END;
        }
        return $res;
    }

    public function render()
    {
        echo $this->afficher();
    }
}