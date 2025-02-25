<?php
require('db.php');
session_start();
    if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
    {
        $uname=$_COOKIE['username'];
        $pass=$_COOKIE['password'];
    }
    else
    {
        $uname="";
        $pass="";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="icon" type="image/x-icon" href="Login.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *
        {
            margin:0;
            padding:0;
        }
        body
        {
            margin: 0;
            background-color: #476D9F;
            background-image:url("https://images.squarespace-cdn.com/content/v1/5fe4caeadae61a2f19719512/1609949734099-1P8KC6I1J479MVWHYKEM/34.jpg?format=2500w");
            background-size:cover;
            /* color: white; */
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            
        }
        #one 
        {

            display:flex;
            flex-direction:column;
            justify-content:space-evenly;
            align-items:center;
            text-align: center;
            margin: auto;
            border: 2px solid rgba(255, 255,255,0.2);
            width: 400px;
            background-color: #B5AA8C;
            height: 350px;
            margin-top: 200px;
            border-radius: 25px;
         /* backdrop-filter: blur(15px);  */
         opacity:0.9;    
        }
        h1
        {
            margin: 0;
            /* margin-top: 20px; */
            /* margin-bottom: 20px; */
        }
        p
        {
            margin: 0;
            display: inline;
        }
        .demo
        {
            width: 300px;
            height: 35px;
            border-radius: 25px;
            border:1px solid green;
            /* background-color: transparent; */
            text-indent: 10px;
        }
        #uname
        {
            margin-right:25px;
        }
        #two
        {
            display: inline-block;

        }
        .links
        {
            text-decoration: none;
            color: black;
            font-weight: 900;
        }
        #login
        {
            background-color:#3F3775;
            color:white;
            width: 300px;
            height: 35px;
            border-radius: 25px;
            border: none;
            margin-top: 20px;
            margin-bottom: 20px;
            font-size: 1.15rem;
            font-weight: bold;
            cursor: pointer;
        }
        #login:hover 
        {
            background-color:#1A1631;
        }
        @media (max-width:400px)
        {
            body
            {
                width:100%;
                background-size:contain;
            }
            #one 
            {
                width:90%;
                           }
        }
    </style>
</head>
<body>
    
    <div id="one">
        <h1>Login</h1>
        <form action="process_login.php" method="post">
            <input type="text" id="uname" placeholder="username" name="username" class="demo" required value="<?php echo $uname ?>">
            <br> <br>
            <input type="password" placeholder="password" name="password" id="pass" class="demo" required value="<?php echo $pass?>">
            <span id="toggleEye"><i class="fa-solid fa-eye"></i></span>
            <br><br>
            <div id="two">
            <input type="checkbox" value="verify" name="remember_me"> 
            <p>Remember Me</p>
            </div>
            <a style="margin-left: 60px;" href="forgetpassword.php" class="links">Forget Password?</a><br>
            <input id="login" type="submit" value="Sign In/Login"><br>
            <p>Don't have an account?</p>
            <a class="links"href="register.php">Register</a>
        </form>
    </div>
    <script>
   const passwordInput = document.querySelector("#pass");
const toggleEye = document.querySelector("#toggleEye").querySelector("i");

toggleEye.addEventListener("click", () => {
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleEye.classList.replace("fa-eye", "fa-eye-slash");
    } else {
        passwordInput.type = "password";
        toggleEye.classList.replace("fa-eye-slash", "fa-eye");
    }
});
    </script>
</body>
</html>