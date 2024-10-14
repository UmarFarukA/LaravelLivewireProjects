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

if (!Validator::string($_POST['content'], $min = 10, $max = 450)) {
    $errors['content'] = "Content is required and maximim of $max characters";
}

if (!Validator::phone($_POST['phone'])) {
    $errors['phone'] = "A valid phone number is required";
}

if (!empty($errors)) {

    Session::put("errors", $errors);
    Session::put("insightData", $_POST);

    redirect("/");
}

// $user = $db->query("select * from users where email = :email", [
//     "email" => $_POST['email']
// ])->find();

// if ($user) {

//     $errors["email"] = "A user with this email already exists!";

//     Session::put("errors", $errors);

//     redirect("/users");
// }

if (empty($errors)) {
    $db->query("INSERT INTO writeUps(name, email, phone, content) VALUES(:name, :email, :phone, :content)", [
        "name" => $_POST['name'],
        "email" => $_POST["email"],
        "phone" => $_POST["phone"],
        "content" => $_POST["content"]
    ]);

    Session::put("success", "Successfully submitted");
}

redirect("/");

exit();
