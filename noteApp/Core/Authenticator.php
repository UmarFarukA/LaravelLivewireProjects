<?php

namespace Core;

class Authenticator {

    protected $db;

    public function __construct()
    {
        $this->db = App::getContainer()->resolve("\Core\Database.php");
    }

    public function attempt($email, $password) {
        $user = $this->db->query("select * from users where username = :email", [
            "email" => $email
        ])->find();

        if($user) {
            if(password_verify($password, $user["password"])) {
                $this->login($user);
                return true;
            }
        }

        return false;
    }

    function login($user){
        $_SESSION["user"] = [
          "email" => $user["username"]
        ];
        session_regenerate_id(true);
    }
      
    function logout(){
        Session::destroy();
    }
}