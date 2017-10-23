<?php

/**
 * router class to manage ... routing?!
 */
class Router
{

  protected $routes = [];

  function define($routes)
  {
    # code...
    $this->routes = $routes;
  }

  function direct($uri)
  {
    #TODO
    if (array_key_exists($uri, $this->routes)) {
      return $this->routes[$uri];
    } else {
      throw new Exception("Error Processing Request for uri.", 1);

    }
  }
}
