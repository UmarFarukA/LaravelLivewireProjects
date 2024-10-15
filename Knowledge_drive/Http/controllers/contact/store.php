<?php

session_start();

use Core\App;
use Core\Session;
use Core\Validator;

$db = App::getContainer()->resolve("\Core\Database.php");

$options = [
    'cost' => 12,
];
$errors = [];

if (!Validator::string($_POST['cname'], $min = 2, $max = 100)) {
    $errors['cname'] = "Name is required and must not be above $max characters";
}

if (!Validator::email($_POST['cemail'])) {
    $errors['cemail'] = "A valid email is required";
}

if (!Validator::string($_POST['cmessage'], $min = 10, $max = 450)) {
    $errors['cmessage'] = "Content is required and maximim of $max characters";
}

if (!empty($errors)) {

    Session::put("errors", $errors);
    Session::put("contactForm", $_POST);

    redirect("/contact");
}

if (empty($errors)) {
    $db->query("INSERT INTO inquiry(name, email, content) VALUES(:name, :email, :content)", [
        "name" => $_POST['cname'],
        "email" => $_POST["cemail"],
        "content" => $_POST["cmessage"]
    ]);

    Session::put("success", "Message successfully Sent");
}

redirect("/contact");

exit();
