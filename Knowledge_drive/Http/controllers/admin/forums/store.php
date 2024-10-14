<?php

session_start();

use Core\App;
use Core\Session;
use Core\Validator;

$db = App::getContainer()->resolve("\Core\Database.php");
$errors = [];

if (!Validator::string($_POST['title'], 2, 100)) {
    $errors['title'] = "Title is required and most be at least 2 characters";
}

if (!Validator::string($_POST['venue'], 2, 100)) {
    $errors['venue'] = "Session Venue is required!";
}


if (!empty($errors)) {
    Session::put("errors", $errors);
    Session::put("formData", $_POST);

    return redirect("/sessions");
}


if (empty($errors)) {
    $db->query("INSERT INTO knowledge_sessions(title, venue, date, status) VALUES(:title, :venue, :date, :status)", [
        "title" => $_POST["title"],
        "venue" => $_POST["venue"],
        "date" => $_POST["date"],
        "status" => $_POST["status"]
    ]);
    Session::put("success", "New session created successfully");
    Session::unflash("formData");
}


redirect("/sessions");

exit();
