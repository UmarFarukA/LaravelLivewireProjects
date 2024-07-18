<?php

namespace Core\Middlware;

class Middleware {
    public const MAP = [
        "regular" => Regular::class,
        "admin" => Admin::class
    ];

    public static function resolve($key) {
         if(!$key) {
            return;
         }

         $middleware = static::MAP[$key] ?? false;

         if(!$middleware) {
            throw new \Exception("There is not matching middleware for the '{$key}' ");
         }

        (new $middleware)->handle();
    }
}