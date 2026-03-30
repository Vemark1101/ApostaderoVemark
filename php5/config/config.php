<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

define('APP_ROOT', dirname(__DIR__));
define('APP_URL', '/HANDS-ON EXERCISE NO. 8 - PHP/php5/index.php');
