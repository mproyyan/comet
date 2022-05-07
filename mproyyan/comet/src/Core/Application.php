<?php

namespace Mproyyan\Comet\Core;

use Mproyyan\Comet\Container\Container;
use Mproyyan\Comet\Routing\Router;
use Mproyyan\Comet\Routing\RoutingServiceProvider;
use Mproyyan\Comet\Suport\Facades\Facade;

class Application extends Container
{
   public function __construct()
   {
      $this->registerBaseBindings();
      $this->registerBaseServiceProvider();

      Facade::setFacadeApplication($this);
   }

   public function run()
   {
      return $this->get(Router::class)->resolve();
   }

   protected function registerBaseBindings()
   {
      static::setInstance($this);

      $this->instance('app', $this);
      $this->instance(Container::class, $this);
   }

   protected function registerBaseServiceProvider()
   {
      $this->register(new RoutingServiceProvider($this));
   }

   public function register($provider)
   {
      $provider->register();

      return $provider;
   }
}
