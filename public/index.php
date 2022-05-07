<?php

use Mproyyan\Comet\Core\Http\Kernel;
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

$app->run();
