<?php

namespace Core\Middleware;

use Core\Session;

class Guest
{
    public static function handle()
    {
        if (!Session::has("user")) {
            redirect("/login");
        }
    }
}
