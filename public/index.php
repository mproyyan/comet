<?php

use Mproyyan\Comet\Core\Http\Kernel;
use Mproyyan\Comet\Suport\Facades\Config;
use Mproyyan\Comet\Suport\Facades\Route;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';
$app->make(Kernel::class)->bootstrap();

Route::get('/', function () {
   echo 'home page';
});

Route::get('/about', function () {
   echo 'about page';
});

Route::get('/config', function () {
   echo '<pre>';
   var_dump(Config::get('app.providers'));
});

$app->run();
