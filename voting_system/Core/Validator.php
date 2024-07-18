<?php

namespace Core;

class Validator {

    /**
     * String Validator
     * @param string $value
     * @param int $min
     * @param int $max
     * @return bool
     */
    public static function string($value, $min = 1, $max = INF) {
        if(is_string($value)) {
            $value = trim($value);
            $length = strlen($value);
            return $length >= $min && $length <= $max;
        }

        return false;
    }


    /**
     * Email validator
     * @param string email
     * @return bool
     */
    public static function email($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    /**
     * Match strings validator
     * @param string $value1
     * @param string $value2
     * @return bool
     */
    public static function match($value1, $value2){
        $value1 = trim($value1);
        $value2 = trim($value2);

        return $value1 === $value2;

    }
}