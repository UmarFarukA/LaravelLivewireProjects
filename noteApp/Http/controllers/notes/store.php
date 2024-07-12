<?php


use Core\Validator;
use Core\App;
// use Core\Database;

$db = App::getContainer()->resolve("\Core\Database.php");

$title_errors = [];
$summary_errors = [];


if (!Validator::validate_string($_POST['title'], $min = 2, $max = 100)) {
    $title_errors['title'] = "Title is required and must not be above $max characters";
}

if (!Validator::validate_string($_POST['summary'], $min = 10, $max = 500)) {
    $summary_errors['summary'] = "Summary is required and must not be above $max characters";
}


if (empty($title_errors) && empty($summary_errors)) {
    $db->query("INSERT INTO notes(title, summary, user_id) VALUES(:title, :summary, :user_id)", [
        "title" => $_POST['title'],
        "summary" => $_POST['summary'],
        "user_id" => 1
    ]);

    header("Location: /notes");
} else {
    return views("notes/create.view.php", [
        "heading" => "Create Note",
        "title_errors" => $title_errors,
        "summary_errors" => $summary_errors
    ]);
}