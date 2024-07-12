<?php

use Core\Response;

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";

  die();
}

function urls()
{
  return $_SERVER["REQUEST_URI"];
}

function authorize($condition) {

    return $condition ? abort($code = Response::FORBIDEN) : "";
}

function base_path($path) {
  return BASE_PATH . $path;
}

function views($path, $attributes = []) {

  extract($attributes);
  require base_path("views/".$path);
} 

function abort($code = 404){
  http_response_code($code);
  views("{$code}.view.php");

  die();
}

function redirect($path) {
  header("Location: $path");
  exit();
}

function old($key, $default = '') {
  return \Core\Session::get("old")[$key] ?? $default;
}