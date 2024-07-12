<?php

use Core\App;
use Core\Validator;

$db = App::getContainer()->resolve("\Core\Database.php");

$username = $_POST["username"];
$password = $_POST["password"];

$options = [
    'cost' => 12,
];
$errors = [];


if(!Validator::validate_email($username)) {
    $errors['username'] = "A valid email is required";
}

if(! Validator::validate_string($password, $min = 8, $max = 24)) {
    $errors['password'] = "Password is require & a min of {$min} characters.";
}

if(!empty($errors)) {
    return views("registration/create.view.php", [
        "errors" => $errors
    ]);
}

$user = $db->query("SELECT * FROM users WHERE username = :username", [
    "username" => $username
])->findOrFail();


if($user) {
    // $usernameErrors['username'] = "Username already exists, please sign in";
    return views("index.view.php");
}

$db->query("INSERT INTO users(username, password) VALUES(:username, :password)", [
    "username" => $username,
    "password" => password_hash($password, PASSWORD_BCRYPT, $options)
]);

header("Location: /");
exit();