<?php

session_start();

use Core\App;
use Core\Session;

$db = App::getContainer()->resolve("\Core\Database.php");

$id = htmlentities($_POST['deleteId']);

$user = $db->query("SELECT * FROM user WHERE id = :id", [
    "id" => $id
])->find();


if ($user) {
    $db->query("DELETE FROM inquiry WHERE id = :id", [
        "id" => $id
    ]);

    Session::put("success", "Successfully deleted");
}

redirect("/users");

exit();
