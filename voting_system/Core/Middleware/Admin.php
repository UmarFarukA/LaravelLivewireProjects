<?php

namespace Core\Middlware;

use Core\Session;

class Admin {
    public static function handle() {
        if(Session::has("user") && Session::get("user")["type"] === "admin") {
            redirect("/admin");
        }
    }
}