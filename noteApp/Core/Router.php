<?php

declare(strict_types=1);


namespace Core;
use Core\Middleware\Middleware;

class Router {

  protected $routes = [];

  public function registerRoutes($method, $uri, $controller) {
    $this->routes[] = [
      "method" => $method,
      "uri" => $uri,
      "controller" => $controller,
      "middleware" => null
    ];

    return $this;
  }

  public function get($uri, $controller) {
    return $this->registerRoutes("GET", $uri, $controller);
  }

  public function post($uri, $controller) {
    return $this->registerRoutes("POST", $uri, $controller);
  }

  public function delete($uri, $controller) {
    return $this->registerRoutes("DELETE", $uri, $controller);
  }

  public function patch($uri, $controller) {
    return $this->registerRoutes("PATCH", $uri, $controller);
  }

  public function put($uri, $controller) {
    return $this->registerRoutes("PUT", $uri, $controller);
  }

  public function only($key) {
    $this->routes[array_key_last($this->routes)]['middleware'] = $key;
    return $this;
  }

  public function route($uri, $method) {
    foreach($this->routes as $route) {
      if($route["uri"] == $uri && $route["method"] == strtoupper($method)) {
        Middleware::resolve($route["middleware"]);

        return require base_path("Http/controllers/".$route["controller"]);
      } 
      
    }
    $this->abort();
  }


  public function abort($code = 404){
    http_response_code($code);
    views("{$code}.view.php");

    die();
  }

}