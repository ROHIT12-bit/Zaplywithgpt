<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ✅ Only send headers if no output has started
if (!headers_sent()) {
    header("Cache-Control: no-cache, no-store, must-revalidate");
    header("Pragma: no-cache");
    header("Expires: 0");
    header("Vary: Cookie");
}

// ✅ Detect login from session or cookie
if (isset($_SESSION['userID'])) {
    $user_id = $_SESSION['userID'];
    define('LOGGED_IN', true);
} elseif (isset($_COOKIE['userID'])) {
    $_SESSION['userID'] = $_COOKIE['userID'];
    $user_id = $_COOKIE['userID'];
    define('LOGGED_IN', true);
} else {
    define('LOGGED_IN', false);
}
