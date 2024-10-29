<?php

session_start();

use Core\App;
use Core\Session;

$db = App::getContainer()->resolve("\Core\Database.php");

$id = htmlentities($_POST['deleteId']);

$inquiry = $db->query("SELECT * FROM inquiry WHERE id = :id", [
    "id" => $id
])->find();


if ($inquiry) {
    $db->query("DELETE FROM inquiry WHERE id = :id", [
        "id" => $id
    ]);

    Session::put("success", "Successfully deleted");
}

redirect("/inquiry");

exit();
