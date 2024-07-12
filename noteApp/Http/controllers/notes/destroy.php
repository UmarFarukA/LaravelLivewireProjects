<?php

use Core\App;
use Core\Database;

$db = App::getContainer()->resolve("\Core\Database.php");


$current_user = 1;

$note = $db->query("SELECT * FROM notes WHERE id = :id", [
    "id" => htmlentities($_GET["id"])
])->findOrFail();

authorize($current_user != $note["user_id"]);


$db->query("DELETE FROM notes WHERE id = :id", [
    "id" => htmlentities($_GET["id"])
]);

header("Location: /notes");