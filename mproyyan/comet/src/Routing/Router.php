<?php

namespace Mproyyan\Comet\Routing;

use Mproyyan\Comet\Request\Request;

class Router
{
   private array $routes = [];

   public Request $request;

   public function __construct(Request $request)
   {
      $this->request = $request;
   }

   public function get(string $url, array|callable $callback)
   {
      $this->routes['get'][$url] = $callback;
   }

   public function post(string $url, array|callable $callback)
   {
      $this->routes['post'][$url] = $callback;
   }

   public function resolve()
   {
      $method = $this->request->method();
      $path = $this->request->path();
      $callback = $this->routes[$method][$path] ?? [];

      if (!$callback) {
         throw new \Exception('Not Found', 404);
      }

      if (is_array($callback)) {
         $controller = new $callback[0];
         $callback[0] = $controller;
      }

      return call_user_func_array($callback, []);
   }
}
