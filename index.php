<?php

require_once __DIR__ . '/vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as DB;
use GEG\controler\connectionControler;
use GEG\controler\notFoundControler;


$db = new DB();
$db->addConnection(parse_ini_file("src/conf/conf.ini"));

$db->setAsGlobal();
$db->bootEloquent();

$app = new \Slim\Slim;

session_start();

$app->get("/loginTest", function() {
	echo "future page de choix des utilisateurs";
});

//Affichage de toutes les listes

$app->get('/loginTest/:id', function ($id) {
    $c = new connectionControler();
    $c->getUser($id);
})->name('route_loginTest');

$app->get('/', function () {
    echo "HOME";
})->name('route_home');


$app->run();
