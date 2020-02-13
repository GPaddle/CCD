<?php


namespace GEG\controler;
use GEG\model\Besoin;
use GEG\view\VueFormulaireBesoin;
use GEG\view\VueListeBesoin;
class ListBesoinControleur
{
    public function render(){
        $v =new VueListeBesoin(Besoin::select("*")->get());
        $v->render();
    }

}