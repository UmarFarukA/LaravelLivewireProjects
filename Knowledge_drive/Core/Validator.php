<?php

declare(strict_types=1);

namespace Core;

class Validator
{
    /**
     * Validate a string based on length.
     *
     * @param string|null $input The input string to validate.
     * @param int $min Minimum length of the string.
     * @param int $max Maximum length of the string.
     * @return bool Returns true if the string is valid, false otherwise.
     */
    public static function string(?string $input, int $min = 2, int $max = PHP_INT_MAX): bool
    {
        if (is_null($input) || empty(trim(htmlentities($input)))) {
            return false;
        }

        $length = strlen(trim($input));

        return $length >= $min && $length <= $max;
    }

    /**
     * Validate an email.
     *
     * @param string|null $email The email to validate.
     * @return bool Returns true if the email is valid, false otherwise.
     */
    public static function email(?string $email): bool
    {
        if (is_null($email) || empty(trim($email))) {
            return false;
        }

        // Validate email format using filter_var
        $isValidEmail = filter_var($email, FILTER_VALIDATE_EMAIL);

        // Optional: Add length check for email (e.g., emails shouldn't exceed 254 characters)
        $emailLength = strlen(trim($email));

        return $isValidEmail && $emailLength <= 254;
    }


    /**
     * Validate Phone Number
     * @param string $phone The number to validate
     * @return true if the phone number is validated, otherwise false.
     * 
     */
    public static function phone($phone): bool
    {
        if (is_null($phone) || empty(trim($phone))) {
            return false;
        }

        if (!preg_match("/^(?:\+234|0)[789]\d{9}$/", $phone)) {
            return false;
        }

        return true;
    }
}
