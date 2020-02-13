<?php

require_once __DIR__ . '/vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as DB;

$db = new DB();
$db->addConnection(parse_ini_file("src/conf/conf.ini"));

$db->setAsGlobal();
$db->bootEloquent();

$app = new \Slim\Slim;

session_start();

//Affichage de toutes les listes

$app->post('/url', function ($id) {
    $c = new Controler();
    
})->name('route_name');

$app->notFound(function () use ($app) {
    $c = new notFoundControler();
    $c->get404();
});

$app->run();
