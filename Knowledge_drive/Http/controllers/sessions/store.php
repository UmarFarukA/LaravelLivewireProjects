<?php

use Core\Authenticator;
use Core\Session;
use Http\Forms\LoginForm;


$email = $_POST["email"];
$password = $_POST["password"];


$form = new LoginForm();

if ($form->validate($email, $password)) {
    if ((new Authenticator)->attempt($email, $password)) {
        redirect("/dashboard");
    }
    $form->error("email", "Invalid username or password");
}


Session::put("errors", $form->errors());
return redirect("/login");
