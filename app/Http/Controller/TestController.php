<?php

namespace App\Http\Controller;

use Mproyyan\Comet\Request\Request;

class TestController
{
   public function index(Request $request, $foo)
   {
      echo '<pre>';
      echo $foo;
      print_r($request);
   }
}
