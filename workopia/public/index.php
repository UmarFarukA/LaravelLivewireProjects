<?php

require __DIR__ . "/../vendor/autoload.php";

use Core\Router;
use Core\Session;

Session::start();

const BASE_PATH = __DIR__ . "/../";

require BASE_PATH . "functions.php";

$router = new Router();
$routes = require base_path("routes.php");

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];


require base_path("bootstrap.php");

$router->route($uri);

