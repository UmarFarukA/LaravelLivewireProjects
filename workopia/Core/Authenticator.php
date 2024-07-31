<?php

namespace Core;

// use Core\Database;
use Core\Validator;
use Core\App;

class Authenticator
{
  protected $db;
  public function __construct()
  {
    $this->db = App::getContainer()->resolve("Core\Database");
  }

  public function attempt($email, $password)
  {
    $user = $this->db->query("SELECT * FROM users WHERE email = :email", [
      "email" => $email
    ])->find();

    if ($user) {
      if (password_verify($password, $user["password"])) {
        $this->Login($user);
        return true;
      }
    }

    return false;
  }

  public function Login($user)
  {
    Session::set("user", [
      "id" => $user["id"],
      "name" => $user["name"],
      "email" => $user["email"]
    ]);

    session_regenerate_id(true);
  }

  public function Logout()
  {
    Session::destroy();
  }
}