<?php

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";

  die();
}

function base_path($path)
{
  return BASE_PATH . $path;
}

function views($path, $attribute = [])
{
  extract($attribute);
  return require base_path("views/{$path}.php");
}


function loadPatials($path, $attributes = [])
{
  extract($attributes);
  return require base_path("views/partials/{$path}.php");
}

function abort($code = 404)
{
  http_response_code($code);
  echo "{$code} - Page Not found";
}

function sanitize($field)
{
  $field = trim(htmlspecialchars($field));
  return $field;
}

function redirect($path)
{
  header("Location: {$path}");
  exit;
}