<?php
// Include database connection
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['new_username'];
    $password = password_hash($_POST['new_password'], PASSWORD_DEFAULT); // Hash password
    $email=$_POST['new_email'];
    // Check if username already exists
    $check_stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $check_stmt->bind_param("s", $username);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        echo "<h3>Username already exists. Please choose a different username.";
    } else {
        // Insert user into database
        $insert_stmt = $conn->prepare("INSERT INTO users (username, pass, email) VALUES (?, ?, ?)");
        $insert_stmt->bind_param("sss", $username, $password,$email);

        if ($insert_stmt->execute()) {
            echo "<h3>Registration successful! <a href='index.php'>Login here</a>.</h3>";
        } else {
            echo "Error: " . $insert_stmt->error;
        }

        $insert_stmt->close();
    }

    $check_stmt->close();
    $conn->close();
}
?>