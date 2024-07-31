<?php

namespace App\Controllers;

use Core\Response;

class ErrorController
{
  public static function error($code = Response::NOT_FOUND, $message = "Resource not found")
  {
    http_response_code($code);

    views("error.view", [
      "code" => $code,
      "message" => $message
    ]);

  }
}