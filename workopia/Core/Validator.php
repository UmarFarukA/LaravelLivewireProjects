<?php

namespace Core;

class Validator
{

  public static function validate_string($value, $min = 2, $max = INF)
  {
    if (is_string($value)) {
      $value = htmlentities(trim($value));
      return strlen($value) >= $min && strlen($value) <= $max ? $value : false;
    }

    return false;
  }
  public static function validate_email($email)
  {
    return filter_var($email, FILTER_VALIDATE_EMAIL) ?? false;
  }

  public static function match($value1, $value2)
  {
    $value1 = static::validate_string($value1);
    $value2 = static::validate_string($value2);

    return $value1 === $value2;
  }
}