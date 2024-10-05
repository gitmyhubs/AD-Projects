<?php
// session_start();
// session_unset(); // Unset all session variables
// session_destroy(); // Destroy the session
// header('location:index.php');
// exit();

// session_start();
// session_destroy();
// header('location:index.php');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

session_unset(); // Clear all session variables
session_destroy(); // Destroy the session

// Prevent caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

header("Location: login.php");
exit();
?>
