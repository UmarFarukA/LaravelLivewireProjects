<?php

namespace Core\Middlware;

class Admin {
    public static function handle() {
        if($_SESSION["user"] && $_SESSION["user"]["type"] === "admin") {
            redirect("/admin");
        }
    }
}