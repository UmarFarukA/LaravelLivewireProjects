<?php

namespace Core\Middleware;

use Core\Session;

class Regular
{
    public static function handle()
    {
        if (Session::has("user") &&  Session::get("user")["type"] === "regular") {
            redirect("/dashboard");
        }
    }
}
