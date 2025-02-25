<?php
// db.php - Database connection file
$host = "sql306.infinityfree.com"; // Database host
$username = "epiz_34168775"; // Database username
$password = "y79byafkn5JtSv"; // Database password
$dbname = "epiz_34168775_sample"; // Database name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>