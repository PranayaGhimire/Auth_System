<?php
// Start the session
session_start();

// Include database connection
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Fetch user from database
    $stmt = $conn->prepare("SELECT id, username, pass FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // Verify password
        if (password_verify($password, $user['pass'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            if(isset($_POST['remember_me']))
            {
                setCookie('uname',$username,time()+(60*60));
                setCookie('password',$password,time()+(60*60));
            }
            else
            {
                setCookie('uname',"",time()-(60*60));
                setCookie('password',"",time()-(60*60));
            }
            // echo "<h3>Welcome ". $username . "<br> <a href ='Port-folio Website'>Click Here</a> to visit my Port-folio Website</h3>";
              header("Location:Port-folio Website");
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "<h3>User not found! Please register first <a href='register.php'>Registration here </a></h3>";
    }

    $stmt->close();
    $conn->close();
}
?>