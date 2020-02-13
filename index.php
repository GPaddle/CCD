<?php

require_once __DIR__ . '/vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as DB;
use GEG\controler\connectionControler;
use GEG\view\VueAjouterCreneau;
use GEG\view\VueGenerale;
use GEG\controler\ListUserControler;
use GEG\controler\testControler;
use GEG\controler\AjouterBesoinControler;
use GEG\controler\CreneauControleur;
use GEG\controler\ListBesoinControleur;

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
    $app = \Slim\Slim::getInstance();
    $urlModif = $app->urlFor('connexion');
    $vGenerale->render("<a href={$urlModif}>Connexion à la page</a>");
})->name('route_home');

$app->get("/ajouterCreneau", function() {
	$a = new CreneauControleur();
	$a->afficher();
});

$app->post("/ajouterCreneau", function() {
	$a = new CreneauControleur();
	$a->SaveCreneau();
});

$app->get("/ajouterBesoin/:idCreneau", function($idCreneau) {
    $controller = new AjouterBesoinControler();
    $controller->renderForm($idCreneau);
})->name('route_ajouterBesoinform');

$app->post("/ajouterBesoin/:idCreneau", function($idCreneau) {
    $controller = new AjouterBesoinControler();
    $controller->ajouterBesoin($idCreneau);
});

$app->get ("/test", function() {

  $controller = new testControler();
  $controller->afficher();

});
$app->get("/connexion",function(){
    $controler=new connectionControler();
    $controler->seConnecter();
})->name('connexion');
$app->get("/listeBesoin",function(){
    $controler=new ListBesoinControleur();
    $controler->render();
});

$app->run();
