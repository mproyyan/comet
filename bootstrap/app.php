<?php

use Mproyyan\Comet\Core\Application;
use App\Http\Kernel;

$app = new Application(
   dirname(__DIR__)
);

$app->singleton(Kernel::class, function ($app) {
   return new Kernel($app);
});

return $app;
