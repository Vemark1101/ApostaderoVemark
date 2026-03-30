<?php

function set_flash_message($key, $message, $type = 'success') {
    $_SESSION[$key] = [
        'message' => $message,
        'type' => $type
    ];
}

function get_flash_message($key) {
    if (isset($_SESSION[$key])) {
        $alert = $_SESSION[$key];
        unset($_SESSION[$key]);
        return $alert;
    }

    return null;
}
