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

if (!empty($errors)) {

    Session::put("errors", $errors);
    Session::put("createData", $_POST);

    redirect("/users");

    // return redirect("/users");
}

$user = $db->query("select * from users where email = :email", [
    "email" => $_POST['email']
])->find();

if ($user) {

    $errors["email"] = "A user with this email already exists!";

    Session::put("errors", $errors);

    redirect("/users");
}

if (empty($errors)) {
    $db->query("INSERT INTO users(name, password, email, role, status) VALUES(:name, :password, :email, :role, :status)", [
        "name" => $_POST['name'],
        "password" => password_hash("abc@123", PASSWORD_BCRYPT, $options),
        "email" => $_POST["email"],
        "role" => $_POST["role"],
        "status" => $_POST["status"]
    ]);

    Session::put("success", "New user created successfully");
}

redirect("/users");

exit();
