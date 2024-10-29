<?php

session_start();

use Core\App;
use Core\Session;
use Core\Validator;

$db = App::getContainer()->resolve("\Core\Database.php");
$errors = [];


if (!Validator::string($_POST['content'], 2, 450)) {
    $errors['content'] = "Content is required and most be at least 450 characters";
}

if (!empty($errors)) {
    Session::put("errors", $errors);
    Session::put("reviewData", $_POST);

    return redirect("/submissions");
}

// dd($_POST["content"]);


if (empty($errors)) {

    $content = $db->query("SELECT * FROM writeUps WHERE id = :id", [
        "id" => trim(htmlentities($_POST["id"]))
    ])->findOrFail();

    if (!$content) {
        return redirect("/submissions");
    }

    $db->query("UPDATE writeUps SET content = :content, status = :status WHERE id = :id", [
        "content" => $_POST["content"],
        "status" => $_POST["status"],
        "id" => trim(htmlentities($_POST["id"]))
    ]);

    Session::put("success", "Successfully updated");
}

redirect("/submissions");

exit();
