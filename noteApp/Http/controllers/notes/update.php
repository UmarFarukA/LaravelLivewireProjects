<?php

use Core\App;
use Core\Validator;

$db = App::getContainer()->resolve("\Core\Database.php");

$title = $_POST['title'];
$summary = $_POST['summary'];
$current_user = 1;

$title_errors = [];
$summary_errors = [];

if(!Validator::validate_string($title, $min = 2, $max = 50)) {
    $title_errors['title'] = "Title is required & must not be morethan {$max} characters";
}

if(!Validator::validate_string($summary, $min = 10, $max = 255)) {
    $summary_errors['summary'] = "Summary is required & must not be morethan {$max} characters";
}

$note = $db->query("SELECT * FROM notes WHERE id = :id", [
    "id" => $_POST['id']
])->findOrFail();


authorize($current_user !== $note['user_id']);

$db->query("UPDATE notes SET title = :title, summary = :summary WHERE id = :id", [
    "title" => $title,
    "summary" => $summary,
    "id" => $note["id"]
]);

header("Location: /notes");

exit();