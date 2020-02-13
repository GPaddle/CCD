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
        $key+=1;
        $res = <<<END
<div class="ligne"><a href="loginTest/$key">
END;

        foreach ($v as $val => $val2) {
            $res .= <<<END
                <div>$val2</div>
END;
        }


        $res = <<<END
$res
    </a>
</div>
END;
        return $res;
    }

    /**
     * Transforme les valeurs en lien
     */
    private function lien($key, $v)
    {
        $app = \Slim\Slim::getInstance();
        $urlModif = $app->urlFor('route_loginTestId', ['id' => $v[0]]);
        return $urlModif;
    }

    /**
     * Donne l'affichage du tableau de la vue
     * @return string
     */
    public function render()
    {
        $vGenerale = new VueGenerale();


        $app = \Slim\Slim::getInstance();
        $urlHome = $app->urlFor('route_home');

        if($urlHome == "/") {
            $urlHome = "";
        }

        $res="<div class='flex'>";
        $tab = $this->convertirFormatTab($this->tab);
        foreach ($tab as $key => $v) {
            $k = $key+1;
            $res .= <<<END
            <div>
                <img src="{$urlHome}img/$k.jpg"></img>
                {$this->formatLigne($key,$v)}
            </div>
END;
        }

        $res.="</div>";




        $vGenerale->render($res);
    }
}