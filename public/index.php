<?php

use app\classes\Routes;
use app\classes\Uri;

require '../bootstrap.php';

$routes = [
  '/' => 'controllers/index.php',
];

$uri = Uri::load();

Routes::load($routes, $uri);