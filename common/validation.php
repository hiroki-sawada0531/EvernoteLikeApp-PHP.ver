<?php

/**
 * @param $errors
 * @param $check_value
 * @param $message
 * @param int $max_size
 */

function emptyCheck(&$errors,$check_value,$message) {
    if(empty(trim($check_value))) {
        array_push($errors,$message);
    }
}

function stringMinSizeCheck(&$errors,$check_value,$message,$min_size = 8) {
    if (mb_strlrn($check_value) < $min_size) {
        array_push($errors,$message);
    }
}

function stringMaxSizeCheck(&$errors,$check_value,$message,$max_size = 255) {
    if ($max_size < mb_strlen($check_value)) {
        array_push($errors,$message);
    }
}

function halfAlphanumericCheck(&$errors,$check_value,$message) {
    if(preg_match("/^[a-zA-z0-9]+$/",check_value) ==false) {
        array_push($errors,$message);
    }
}