<?php
// Start the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Set a flag to indicate logout
$_SESSION['logged_out'] = true;

// Destroy the session
session_destroy();

// Redirect to the home page
header("Location: ../views/trangchu.php");
exit();
?>
