<?php

namespace Core\Middlware;

use Core\Session;

class Guest {
    public static function handle() {
        if(!Session::has("user")) {
            redirect("/login");
        }
    }
}