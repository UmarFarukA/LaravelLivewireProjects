<?php

namespace Core;

class Session {

    public static function set($key, $value) {
        if(!$key || !$value) {
            return;
        }

        $_SESSION[$key] = $value;
    }

    public static function get($key){
        if(!$key) {
            return;
        }

        return $_SESSION[$key];
    }

    public static function has($key){
        return (bool) self::get($key);
    }

    public static function flush(){
        $_SESSION = [];
    }

    public static function destroy() {
        self::flush();
        $params = session_get_cookie_params();
        setcookie("PHPSESSID", "", time() - 3600, $params["path"], $params['domain'], $params['httponly'], $params['secure']);
        redirect("/");
    }

    public static function flashMessage($key, $message) {
        self::set($key, $message);
    }

    public static function getFlashMessage($key) {
        return self::get($key);
    }
    
}