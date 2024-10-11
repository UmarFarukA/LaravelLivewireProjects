<?php

use Core\App;

$db = App::getContainer()->resolve("\Core\Database.php");

$users = $db->query("select * from users")->get();


views("admin/users/index.view.php", [
    "users" => $users
]);
