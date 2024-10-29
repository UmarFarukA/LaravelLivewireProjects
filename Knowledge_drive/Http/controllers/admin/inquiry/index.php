<?php

use Core\App;
use Core\Session;

$db = App::getContainer()->resolve("\Core\Database.php");

if (Session::has("user")) {
    $user = Session::get("user");
}

$inquiries = $db->query("SELECT * FROM inquiry ORDER BY submitted_on DESC")->get();

views("admin/inquiry/index.view.php", [
    "inquiries" => $inquiries,
    "user" => $user
]);
