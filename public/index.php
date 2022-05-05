<?php

use Mproyyan\Comet\Core\Application;
use Mproyyan\Comet\Suport\Facades\Route;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$app = new Application;

Route::get('/', function () {
   echo 'home page';
});

Route::get('/about', function () {
   echo 'about page';
});

$app->run();
