<?php

use App\Http\Controller\TestController;
use App\Http\Kernel;
use Mproyyan\Comet\Suport\Facades\Config;
use Mproyyan\Comet\Suport\Facades\Route;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';
$app->make(Kernel::class)->bootstrap();

Route::get('/test/{foo}', [TestController::class, 'index']);

$app->run();
