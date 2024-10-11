<?php

session_start();

use Core\App;

$db = App::getContainer()->resolve("\Core\Database.php");

$id = htmlentities($_POST['deleteId']);

$event = $db->query("SELECT * FROM knowledge_sessions WHERE id = :id", [
    "id" => $id
])->find();


if ($event) {
    $db->query("DELETE FROM knowledge_sessions WHERE id = :id", [
        "id" => $id
    ]);
}

redirect("/sessions");

exit();
