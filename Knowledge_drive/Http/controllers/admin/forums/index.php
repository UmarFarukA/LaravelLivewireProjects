<?php

use Core\App;
use Core\Session;

$db = App::getContainer()->resolve("\Core\Database.php");

$events = $db->query("select * from knowledge_sessions")->get();

if (Session::has("user")) {
    $user = Session::get("user");
}

views("admin/forums/index.view.php", [
    "events" => $events,
    "user" => $user
]);
