<?php

use Core\App;
use Core\Database;

$db = App::getContainer()->resolve("\Core\Database.php");

$current_user = 1;




$note = $db->query("select * from notes where id = :id", [
    "id" => $_GET["id"]
])->findOrFail();


authorize($note["user_id"] !== $current_user);

views("notes/show.view.php", ["note" => $note]);