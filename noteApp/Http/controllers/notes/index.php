<?php

use Core\App;


$db = App::getContainer()->resolve("\Core\Database.php");


$notes  = $db->query("select * from notes")->get();

// dd($notes);

views("notes/index.view.php", [
    "notes" => $notes
]);