<?php

use Mproyyan\Comet\Core\Application;
use Mproyyan\Comet\Core\Http\Kernel;

$app = new Application(
   dirname(__DIR__)
);

$app->singleton(Kernel::class, function ($app) {
   return new Kernel($app);
});

return $app;
