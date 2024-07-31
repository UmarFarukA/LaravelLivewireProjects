<?php

namespace Core;

class Session
{

  public static function start()
  {
    if (session_status() === PHP_SESSION_NONE) {
      session_start();
    }
  }

  public static function set($key, $value)
  {
    $_SESSION[$key] = $value;
  }

  public static function get($key, $default = null)
  {
    return $_SESSION[$key] ?? $default;
  }

  public static function has($key)
  {
    return (bool) static::get($key);
  }

  public static function flush()
  {
    $_SESSION = [];
  }

  public static function destroy()
  {
    self::flush();
    $params = session_get_cookie_params();
    setcookie("PHPSESSID", "", time() - 3600, $params["path"], $params["secure"], $params["domain"], $params["Httponly"]);
    redirect("/");
  }

  public static function flash($type, $message = null)
  {
    self::set($type, $message);
  }

  public static function getFlashMessage($key)
  {
    if (!$key) {
      return;
    }

    $message = self::get($key);

    self::flush();

    return $message;
  }

}