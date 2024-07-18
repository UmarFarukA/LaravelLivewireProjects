<?php

namespace Core\Middlware;

class Guest {
    public static function handle() {
        if($_SESSION["user"]) {
            redirect("/");
        }
    }
}