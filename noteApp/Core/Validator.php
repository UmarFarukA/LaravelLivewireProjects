<?php

// declare(strict_types=1);

namespace Core;

class Validator {

    public  static function validate_string($input, $min = 2, $max = INF) {
        $value = trim($input);

        return  strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function validate_email($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}