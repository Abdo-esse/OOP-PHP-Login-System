<?php 
 require "../includes/signup.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Sign Up Form</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to bottom, #f0f0f0, #d9d9d9);
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            gap: 50px;
        }
        .form-box {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background: white;
        }
        .form-box h2 {
            margin-bottom: 10px;
        }
        .form-box input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-box button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .form-box button:hover {
            background: #0056b3;
        }
        .login-box {
            background: #222;
            color: white;
        }
        .login-box input {
            border: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sign Up Form -->
        <div class="form-box">
            <h2>SIGN UP</h2>
            <p>Don't have an account yet? Sign up here!</p>
            <form action="../includes/signup.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwdrepeat" placeholder="Repeat Password">
            <input type="email" name="email" placeholder="E-mail">
            <button type="submit" name="submit">SIGN UP</button>
            </form>
        </div>

        <!-- Login Form -->
        <div class="form-box login-box">
            <h2>LOGIN</h2>
            <p>Don't have an account yet? Sign up here!</p>
            <form action="" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="submit">LOGIN</button>
            </form>
        </div>
    </div>
</body>
</html>
