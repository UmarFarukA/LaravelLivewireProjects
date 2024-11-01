<?php

use Core\App;
use Core\Session;

$db = App::getContainer()->resolve("\Core\Database.php");

$submissions = $db->query("SELECT * FROM writeUps ORDER BY created_at DESC")->get();

if (Session::has("user")) {
    $user = Session::get("user");
}

header('Content-Type: application/json');

echo json_encode($submissions);

exit;
