<?php
session_start();

// Check if the session variable is set
if (isset($_SESSION['admin_email'])) {
    // User is logged in
} else {
    // Redirect to login page or show appropriate message
    header('Location: login.php');
    exit;
}
?>
