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
    Session::put("editData", $_POST);

    // dd("we are here");

    return redirect("/sessions");
}


if (empty($errors)) {

    $event = $db->query("select * from knowledge_sessions where id = :id", [
        "id" => trim(htmlentities($_POST["id"]))
    ])->findOrFail();

    if (!$event) {
        return redirect("/sessions");
    }

    $db->query("UPDATE knowledge_sessions SET title = :title, venue =:venue, date = :date, status = :status, resolution = :resolution WHERE id = :id", [
        "title" => $_POST["title"],
        "venue" => $_POST["venue"],
        "date" => $_POST["date"],
        "status" => $_POST["status"],
        "resolution" => $_POST["resolution"],
        "id" => trim(htmlentities($_POST["id"]))
    ]);
}

redirect("/sessions");

exit();
