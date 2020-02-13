<?php

require_once __DIR__ . '/vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as DB;
use GEG\controler\connectionControler;
use GEG\controler\notFoundControler;
use GEG\view\VueAjouterCreneau;
use GEG\view\VueGenerale;
use GEG\controler\ListUserControler;
use GEG\controler\FormulaireBesoinControler;


$db = new DB();
$db->addConnection(parse_ini_file("src/conf/conf.ini"));

$db->setAsGlobal();
$db->bootEloquent();

$app = new \Slim\Slim;

session_start();


$app->get("/ajoutCreneau", function () {
    $v = new VueAjouterCreneau();
    $v->render();
})->name('route_ajoutCreneau');

$app->get("/loginTest", function () {

    $vGenerale = new VueGenerale();

    $vGenerale->render("future page de choix des utilisateurs");


})->name('route_loginTest');

//Affichage de toutes les listes

$app->get('/loginTest/:id', function ($id) {
    $c = new connectionControler();
    $c->getUser($id);
})->name('route_loginTestId');

$app->get('/listeUser', function () {
    $c = new ListUserControler();
    $c->getAllUser();
})->name('route_listeUser');

$app->get('/', function () {
    $vGenerale = new VueGenerale();
    $vGenerale->render("HOME");
})->name('route_home');

$app->get("/FormulaireAjouterCreneau", function() {
	$a = new VueAjouterCreneau();
	$a->render();
});

$app->get("/FormulaireAjoutBesoin", function() {
    $a = new FormulaireBesoinControler();
    $a->afficher();
})->name('route_formulaireajoutbesoin');

$app->run();
