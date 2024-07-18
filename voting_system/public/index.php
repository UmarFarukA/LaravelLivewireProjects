<?php

use Core\Router;

const BASE_PATH = __DIR__ . "/../";

require BASE_PATH . "functions.php";


$router = new Router();

$routes = require base_path("routes.php");
require base_path("bootstrap.php");

$url = parse_url($_SERVER["REQUEST_URI"])['path'];

$method = $_POST["_method"] ?? $_SERVER["REQUEST_METHOD"];

$router->route($url, $method);