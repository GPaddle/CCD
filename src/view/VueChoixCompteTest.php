<?php


namespace GEG\view;

/**
 * Class VueChoixCompteTest
 * @package GEG\view
 */
class VueChoixCompteTest
{
    /**
     * @var Le tableau
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
     * @param $tab Le tableau à convertir au cas où
     * @return mixed le tableau
     */
    public function convertirFormat($tab){
        return $tab; // Au cas où le tableau reçu serait incompatible à la vue faite
}
}