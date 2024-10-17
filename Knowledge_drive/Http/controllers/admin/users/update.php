<?php

session_start();

use Core\App;
use Core\Session;
use Core\Validator;

$db = App::getContainer()->resolve("\Core\Database.php");

$errors = [];

// Validate input
if (!Validator::string($_POST['editName'], 2, 100)) {
    $errors['editName'] = "Name is required and must be between 2 and 100 characters.";
}

if (!Validator::email($_POST['editEmail'])) {
    $errors['editEmail'] = "A valid email is required.";
}


// If there are validation errors
if (!empty($errors)) {
    Session::put("errors", $errors);
    Session::put("editData", $_POST);
    redirect("/users");
}

// Retrieve the current user from the database
$current_user = $db->query("SELECT * FROM users WHERE id = :id", [
    "id" => $_POST["editId"]
])->find();


// If the email has changed, check if the new email is already in use
if ($current_user && $current_user['email'] !== $_POST['editEmail']) {
    $existing_user = $db->query("SELECT * FROM users WHERE email = :email", [
        "email" => $_POST['editEmail']
    ])->find();

    if ($existing_user) {
        $errors["editEmail"] = "A user with this email already exists!";
        Session::put("errors", $errors);
        redirect("/users");
    }
}

// Update the user information
$db->query("UPDATE users SET name = :name, email = :email, role = :role, status = :status WHERE id = :id", [
    "name" => $_POST['editName'],
    "email" => $_POST['editEmail'],
    "role" => $_POST['editRole'],
    "status" => $_POST['editStatus'],
    "id" => $_POST['editId']
]);

Session::put("success", "User updated successfully");
redirect("/users");
exit();
