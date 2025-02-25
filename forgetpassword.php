<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset Page</title>
    <link rel="icon" type="image/x-icon" href="Login.ico">
    <style>
        *
        {
            margin:0;
            padding:0;
            color: white;
        }
        body 
        {
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
            background-color: cadetblue;
            background-image:url("https://images.squarespace-cdn.com/content/v1/5fe4caeadae61a2f19719512/d8a8884c-5404-4ccb-b9f1-9498902b3dc3/Sanctuary+Under+the+Sea?format=2500w");
            background-size:cover;
        }
        .container 
        {
            width: 350px;
            height:250px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            background-color:#0E580A;
            opacity:0.9;
        }
        h1
        {
            text-align: center;
        }
        .input-data
        {
            margin-bottom: 1rem;
            height: 2rem;
            width: 95%;
            border-radius: 15px;
            text-indent: 10px;
            margin-left: 10px;
            color: black;
            border: none;
        }
        #reset
        {
            background-color:#02A9EA;
            color: white;
            width: 60%;
            height: 2rem;
            font-size: 1.05rem;
            margin-left: 70px;
            cursor: pointer;
            border-radius: 15px;
            border: none;
        }
        #reset:hover 
        {
            background-color: #042d3d;
        }
        </style>
</head>
<body>

    <div class="container">
        <h1>Forget Password</h1>
            <form method="post" action="process_forgetpassword.php">
                <input type="email" name="email" placeholder="Enter your email" required class="input-data"> <br>
                <input type="submit" value="Send Token" id="reset">
                
            </form>
        </div>
</body>
</html>