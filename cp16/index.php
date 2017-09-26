<?php

require 'core/bootstrap.php';

$routes = new Router;
require 'routes.php';
$uri = trim($_SERVER['REQUEST_URI'],'/');
require $routes->direct($uri);
