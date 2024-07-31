<?php

namespace App\Controllers;

use Core\App;
use Core\Authenticator;
use Core\Validator;
use Core\Session;

class UserController
{

  protected $db;

  public function __construct()
  {
    $this->db = App::getContainer()->resolve("Core\Database");
  }

  public function register()
  {
    views("users/create.view");
  }

  public function store()
  {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $password = $_POST["password"];
    $cpassword = $_POST["password_confirmation"];

    $errors = [];

    if (!Validator::validate_email($email)) {
      $errors["email"] = "A valid email address is required";
    }

    if (!Validator::validate_string($name)) {
      $errors["name"] = "A name is required";
    }

    if (!Validator::validate_string($password, $min = 6, $max = 12)) {
      $errors["password"] = "A Password of minimum of six characters is required";
    }

    if (!Validator::match($password, $cpassword)) {
      $errors["password"] = "password do not match";
    }

    if (!empty($errors)) {
      return views("users/create.view", [
        "errors" => $errors
      ]);
    }

    $user = $this->db->query("SELECT * FROM users WHERE email = :email", [
      "email" => $email
    ])->find();

    if ($user) {
      views("users/create.view", [
        "errors" => [
          "user" => "User already exists, please sign in"
        ]
      ]);
      exit;
    }

    $newUser = [
      "name" => $name,
      "email" => $email,
      "city" => $city,
      "state" => $state,
      "password" => password_hash($password, PASSWORD_BCRYPT)
    ];

    $query = "INSERT into users(name, email, city, state, password) VALUES(:name, :email, :city, :state, :password)";

    $this->db->query($query, $newUser);

    $user_id = $this->db->lastInsertId();

    Session::set("user", [
      "user_id" => $user_id,
      "name" => $name,
      "email" => $email,
    ]);

    redirect("/");

  }


  public function login()
  {
    views("users/login.view");
  }

  public function auth()
  {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $errors = [];

    if (!Validator::validate_email($email)) {
      $errors["email"] = "A valid email address is required";
    }

    if (!Validator::validate_string($password, 6, 15)) {
      $errors["password"] = "Password must be at least six characters";
    }

    if (!empty($errors)) {
      views("users/login.view", ["errors" => $errors]);
      exit;
    }

    if (!(new Authenticator)->attempt($email, $password)) {
      views("users/login.view", [
        "errors" => [
          "user" => "Username/Password is invalid"
        ]
      ]);
      exit;
    }

    redirect("/");
  }

  public function logout()
  {
    (new Authenticator)->Logout();
  }
}