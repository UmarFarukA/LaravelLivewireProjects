<?php

namespace Core;

use App\Controllers\ErrorController;
use Core\Middleware\Middleware;
use HomeControllers\HomeController;

class Router
{
  protected $routes = [];

  public function registerRoutes($method, $uri, $action)
  {

    list($controller, $controllerMethod) = explode("@", $action);

    $this->routes[] = [
      "method" => $method,
      "uri" => $uri,
      "controller" => $controller,
      "controllerMethod" => $controllerMethod,
      "middleware" => null
    ];

    return $this;
  }

  public function get($uri, $controller)
  {

    return $this->registerRoutes(
      "GET",
      $uri,
      $controller
    );
  }

  public function post($url, $controller)
  {
    return $this->registerRoutes(
      "POST",
      $url,
      $controller
    );
  }

  public function put($url, $controller)
  {
    return $this->registerRoutes(
      "PUT",
      $url,
      $controller
    );
  }

  public function delete($url, $controller)
  {
    return $this->registerRoutes(
      "DELETE",
      $url,
      $controller
    );
  }

  public function patch($url, $controller)
  {
    return $this->registerRoutes(
      "PATCH",
      $url,
      $controller
    );
  }

  public function only($key)
  {
    $this->routes[array_key_last($this->routes)]["middleware"] = $key;

    return $this;
  }

  public function route($uri)
  {
    $requestMethod = $_SERVER["REQUEST_METHOD"];

    if ($requestMethod === "POST" && isset($_POST["_method"])) {
      $requestMethod = strtoupper($_POST["_method"]);
    }

    foreach ($this->routes as $route) {
      $uriSegments = explode("/", trim($uri, "/"));
      $routeSegments = explode("/", trim($route['uri'], "/"));
      $match = true;

      if (count($uriSegments) === count($routeSegments) && strtoupper($route["method"] === $requestMethod)) {
        $params = [];
        $match = true;
        for ($i = 0; $i < count($uriSegments); $i++) {
          if ($routeSegments[$i] !== $uriSegments[$i] && !preg_match("/\{(.+?)\}/", $routeSegments[$i])) {
            $match = false;
            break;
          }

          if (preg_match("/\{(.+?)\}/", $routeSegments[$i], $matches)) {
            $params[$matches[1]] = $uriSegments[$i];
          }
        }

        if ($match) {

          Middleware::resolve($route["middleware"]);

          $controller = "App\\Controllers\\" . $route["controller"];
          $controllerMethod = $route["controllerMethod"];

          (new $controller)->$controllerMethod($params);
        }
      }
    }
    // ErrorController::error();
  }
}