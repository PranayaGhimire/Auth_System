<?php
// Start the session
session_start();

session_unset();
// Destroy the session to log the user out
session_destroy();

// Redirect to the login page or homepage
header("Location: index.php"); 
exit();
?>