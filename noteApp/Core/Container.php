<?php

namespace Core;

class Container {

    protected $bindings = [];

    public function bind($key, $func) {
        $this->bindings[$key] = $func;
    }

    public function resolve($key) {

        if(!array_key_exists($key, $this->bindings)) {
            new \Exception("Error is resolving the key");
        }

        $resolver = $this->bindings[$key];

        return call_user_func($resolver);
    }
}