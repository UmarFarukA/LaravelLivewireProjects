<?php

namespace Core\Middleware;

class Middleware {
    public const MAP = [
        "auth" => Auth::class,
        "guest" => Guest::class
    ];

    public static function resolve($key) {

        if(!$key) {
            return;
        }

        $middleware = static::MAP[$key] ?? false;

        if(!$middleware) {
            throw new \Exception("There is no matching middleware found for the key '{$key}'");
        }

        (new $middleware)->handle();

    }
}