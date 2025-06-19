<?php
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Delete the userID cookie
setcookie('userID', '', time() - 3600, '/', '', true, true);

// Redirect to home with cache buster
header('Location: /home?v=' . time());
exit;

