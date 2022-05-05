<?php

namespace Mproyyan\Comet\Core;

use Mproyyan\Comet\Container\Container;
use Mproyyan\Comet\Request\Request;
use Mproyyan\Comet\Routing\Router;
use Mproyyan\Comet\Suport\Facades\Facade;

class Application extends Container
{
   public function __construct()
   {
      $this->registerRouter();
      Facade::setFacadeApplication($this);
   }

   public function run()
   {
      return $this->get(Router::class)->resolve();
   }

   protected function registerRouter()
   {
      $this->singleton(Router::class, function ($container) {
         return new Router($container->make(Request::class));
      });
   }
}
