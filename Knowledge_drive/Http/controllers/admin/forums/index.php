<?php

use Core\App;

$db = App::getContainer()->resolve("\Core\Database.php");

$events = $db->query("select * from knowledge_sessions")->get();

views("admin/forums/index.view.php", [
    "events" => $events
]);
