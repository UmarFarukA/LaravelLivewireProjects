<?php

namespace Core;

// use App\Controllers\ErrorController;
// use Core\Response;

class Authorization
{
  public static function authorize($condition)
  {
    return $condition;
  }
}

// ?? ErrorController::error($code = Response::FORBIDDEN, $message = "Access Denied");