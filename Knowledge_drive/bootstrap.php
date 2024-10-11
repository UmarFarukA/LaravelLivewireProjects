<?php

use Core\App;
use Core\Database;
use \Core\Container;

$container = new Container();

$container->bind("\Core\Database.php", function () {
    $config = require base_path("config.php");
    return new Database($config["database"]);
});

App::setContainer($container);

// $db = App::getContainer()->resolve("\Core\Database.php");

// $test = $db->query("select * from users where email = :email and role = :role", [
//     "email" => "talk2ufaz@gmail.com",
//     "role" => "admin"
// ])->get();

// dd($test);