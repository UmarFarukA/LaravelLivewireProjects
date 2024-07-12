<?php

namespace Http\Forms;

use Core\Validator;

class LoginForm {

    protected $errors = [];

    public function validate($email, $password) {

        if(!Validator::validate_email($email)) {
            $this->errors['email'] = "A valid email is required";
        }
        
        if(!Validator::validate_string($password, $min=8, $max=24)) {
            $this->errors["password"] = "Enter a valid password";
        }

        return empty($this->errors);

    }

    public function errors() {
        return $this->errors;
    }

    public function error($field, $message) {
        $this->errors[$field] = $message;
    }

}


// use Core\Validator;
// use Core\App;

// $db = App::getContainer()->resolve("\Core\Database.php");

// $email = $_POST["email"];
// $password = $_POST["password"];




// if(!empty($errors)) {

// }