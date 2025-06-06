<?php

use Core\App;
use Core\Session;

$db = App::getContainer()->resolve("\Core\Database.php");

$users = $db->query("select * from users")->get();

if (Session::has("user")) {
    $user = Session::get("user");
}



views("admin/users/index.view.php", [
    "users" => $users,
    "user" => $user
]);
