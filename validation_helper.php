<?php


if (!function_exists('is_valid_mobile')) {
    function is_valid_mobile($mobile)
    {
        return preg_match('/^(\+62|62|0)8[1-9][0-9]{6,10}$/', $mobile);
    }
}

if (!function_exists('is_valid_email')) {
    function is_valid_email($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}

if (!function_exists('is_valid_integer')) {
    function is_valid_integer($integer)
    {
        return filter_var($integer, FILTER_VALIDATE_INT);
    }
}

if (!function_exists('is_valid_date')) {
    function is_valid_date($date)
    {
        return preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $date);
    }
}
