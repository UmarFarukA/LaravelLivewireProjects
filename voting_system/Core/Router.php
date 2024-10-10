<?php

namespace Core;

use Core\Middleware\Middleware;

class Router
{

    protected $routes = [];

    public function add($method, $url, $controller)
    {
        $this->routes[] = [
            "method" => $method,
            "url" => $url,
            "controller" => $controller,
            "middleware" => null
        ];

        return $this;
    }

    public function get($url, $controller)
    {
        return $this->routes[] = $this->add("GET", $url, $controller);
    }

    public function post($url, $controller)
    {
        return $this->routes[] = $this->add("POST", $url, $controller);
    }

    public function put($url, $controller)
    {
        return $this->routes[] = $this->add("PUT", $url, $controller);
    }

    public function patch($url, $controller)
    {
        return $this->routes[] = $this->add("PATCH", $url, $controller);
    }

    public function delete($url, $controller)
    {
        return $this->routes[] = $this->add("DELETE", $url, $controller);
    }

    public function only($key)
    {
        return $this->routes[array_key_last($this->routes)]["middleware"] = $key;
    }

    public function route($url, $method)
    {
        foreach ($this->routes as $route) {
            if ($route["url"] === $url && $route["method"] === $method) {
                Middleware::resolve($route["middleware"]);
                return require base_path("App/controllers/" . $route["controller"]);
            }
        }
    }
}
