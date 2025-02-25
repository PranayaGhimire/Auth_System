<?php
// ... database connection ...

$email = $_POST['email'];

// ... retrieve user from database based on $email_or_username ...

if ($user) {
    $token = md5(uniqid(rand(), true));
    $expiry = date("Y-m-d H:i:s", time() + (24 * 60 * 60)); // 24 hours

    // ... update user's reset_token and reset_token_expiry in the database ...

    $reset_link = "http://yourwebsite.com/reset_password.php?token=" . $token;

    // ... send email using mail() or PHPMailer ...

    echo "A password reset link has been sent to your email address.";
} else {
    echo "User not found.";
}
?>