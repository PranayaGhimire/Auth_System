<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
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
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
            background-color: cadetblue;
            background-image:url("https://images.squarespace-cdn.com/content/v1/5fe4caeadae61a2f19719512/457446d8-7c24-442e-8f1b-86c36f40404f/Starry+Sky+at+Midnight?format=2500w");
             color: white;
        }
        .container 
        {
            width: 350px;
            height:400px;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            background-color:#0E580A;
            opacity:0.9;
        }
        .input-data
        {
            margin-bottom: 1rem;
            height: 2rem;
            border-radius: 15px;
            text-indent: 10px;
            color:black;
            border:none;
            width:100%;
        }
        #sign
        {
            background-color:#02A9EA;
            color: white;
            width: 100%;
            height: 2rem;
            font-size:1.15rem;
            cursor: pointer;
            border-radius: 15px;
            border:none;
            margin-bottom:1rem;
        }
        #sign:hover 
        {
            background-color: #042d3d;
        }
        a 
        {
            text-decoration:none;
            color:white;
            font-weight:700;
        }
        @media (max-width:550 px)
        {
            body 
            {

            background-image:url("https://images.pexels.com/photos/1366919/pexels-photo-1366919.jpeg?auto=compress&cs=tinysrgb&w=600");
            background-size:cover;
            }
        }
        </style>
</head>
<body>
    <!-- Simple Registration Form -->

    <div class="container">
    <h1>Register</h1>
            <form method="post" action="process_register.php">
           
                <input type="text" name="new_username" placeholder="Username" required class="input-data"> <br>
                <input type="email" name="new_email" placeholder="Email Address" required class="input-data"><br>
                <input type="password" name="new_password" id="new_pass" placeholder="Password" required class="input-data">
                <br>
                <input type="password" name="new_confirm_password" id="new_confirm_pass" placeholder="Confirm Password" required class="input-data">
               <br>
                <input type="submit" value="Sign Up/Register" id="sign">
                  <!-- Link to Login Page -->
    <p>Already have an account? <a href="index.php">Login here</a></p>
            </form>
        </div>
</body>
<script>
    document.querySelector("form").addEventListener("submit",(e)=>
    {
        const password=document.querySelector("#new_pass").value;
        const confirmPassword=document.querySelector("#new_confirm_pass").value;
        if(password!==confirmPassword)
        {
            e.preventDefault();    // Stop form submission
            alert("Oops Passwords do not match! Please re-enter");
            document.querySelector("form").reset();
        }
    });
</script>
</html>