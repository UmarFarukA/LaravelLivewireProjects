<?php

namespace Core\Middlware;
use Core\Session;

class Regular {
    public static function handle() {
        if(Session::has("user") &&  Session::get("user")["type"] === "regular") {
            redirect("/dashboard");
        }
    }
}