<?php

use Mproyyan\Comet\Core\Application;
use Mproyyan\Comet\Routing\Router;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$app = new Application;
$router = $app->make(Router::class);
// echo '<pre>';
// var_dump($app);
// die;

$router->get('/', function () {
   echo 'home page';
});

$router->get('/about', function () {
   echo 'about page';
});

$app->run();
