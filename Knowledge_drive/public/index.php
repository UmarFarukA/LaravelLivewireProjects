<?php

session_start();

use Core\App;
use Core\Router;
use Core\Session;

require __DIR__ . "/../vendor/autoload.php";
const BASE_PATH = __DIR__ . "/../";


require BASE_PATH . "functions.php";

$router = new Router();

$routes = require base_path("routes.php");

require base_path("bootstrap.php");

$uri = parse_url($_SERVER["REQUEST_URI"])['path'];
$method = $_POST["_method"] ?? $_SERVER["REQUEST_METHOD"];


$router->route($uri, $method);

$db = App::getContainer()->resolve("\Core\Database.php");

// Session::unflash("");