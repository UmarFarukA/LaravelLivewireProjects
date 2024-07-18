<?php

namespace Core\Middlware;

class Regular {
    public static function handle() {
        if($_SESSION["user"] && $_SESSION["user"]["type"] === "regular") {
            redirect("/dashboard");
        }
    }
}