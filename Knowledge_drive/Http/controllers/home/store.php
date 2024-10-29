<?php

session_start();

use Core\App;
use Core\Session;
use Core\Validator;

// dd("we are here");

$db = App::getContainer()->resolve("\Core\Database.php");

$options = [
    'cost' => 12,
];
$errors = [];

if (!Validator::string($_POST['name'], $min = 2, $max = 100)) {
    $errors['name'] = "Name is required and must not be above $max characters";
}

if (!Validator::email($_POST['email'])) {
    $errors['email'] = "A valid email is required";
}

if (!Validator::string($_POST['content'], $min = 10)) {
    $errors['content'] = "Content is required";
}

if (!Validator::phone($_POST['phone'])) {
    $errors['phone'] = "A valid phone number is required";
}

if (str_word_count($_POST['content']) > 150) {
    $errors['content'] = "Submssion must not be above 150 words!";
}

if (!empty($errors)) {

    Session::put("errors", $errors);
    Session::put("insightData", $_POST);

    redirect("/");
}

if (empty($errors)) {
    $db->query("INSERT INTO writeUps(name, email, phone, content, status) VALUES(:name, :email, :phone, :content, :status)", [
        "name" => $_POST['name'],
        "email" => $_POST["email"],
        "phone" => $_POST["phone"],
        "content" => $_POST["content"],
        "status" => 0
    ]);

    Session::put("success", "Successfully submitted");
}

redirect("/");

exit();
