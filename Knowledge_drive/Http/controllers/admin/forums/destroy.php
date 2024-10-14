<?php

session_start();

use Core\App;
use Core\Session;

$db = App::getContainer()->resolve("\Core\Database.php");

$id = htmlentities($_POST['deleteId']);

$event = $db->query("SELECT * FROM knowledge_sessions WHERE id = :id", [
    "id" => $id
])->find();


if ($event) {
    $db->query("DELETE FROM knowledge_sessions WHERE id = :id", [
        "id" => $id
    ]);

    Session::put("success", "Successfully deleted");
}

redirect("/sessions");

exit();
