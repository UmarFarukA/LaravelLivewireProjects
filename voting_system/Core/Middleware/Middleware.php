<?php

namespace Core\Middleware;

use Core\Middleware\Admin;
use Core\Middleware\Guest;
use Core\Middleware\Regular;

class Middleware
{
    public const MAP = [
        "regular" => Regular::class,
        "admin" => Admin::class,
        "guest" => Guest::class
    ];

    public static function resolve($key)
    {

        if (!$key) {
            return;
        }

        $middleware = static::MAP[$key] ?? false;

        if (!$middleware) {
            throw new \Exception("There is not matching middleware for the '{$key}' ");
        }

        (new $middleware)->handle();
    }
}
