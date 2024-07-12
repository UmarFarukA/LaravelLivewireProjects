<?php

use Core\App;

$db = App::getContainer()->resolve("\Core\Database.php");

$note = $db->query("SELECT * FROM notes WHERE id = :id", [
    "id" => $_GET["id"]
])->findOrFail();

views("notes/edit.view.php", ["note" => $note]);