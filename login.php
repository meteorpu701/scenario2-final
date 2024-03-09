<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NHS Login Page</title>
<link rel="stylesheet" href="nhs.css">
<style>
    .login-container {
        background: gainsboro;
        padding: 20px;
        border-radius: 5px;
        width: 500px; 
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.7);
    }

    .create-account {
        background-color: #007f3b;
        color: white;
        text-decoration: none;
        padding: 10px;
        display: block;
        text-align: center;
        border-radius: 5px;
        width: 300px;
        margin-top: 20px;
    }
</style>
</head>
<body>

<div class="header">
    <a href="https://www.nhs.uk">
        <img src="nhslogo.jpeg" alt="NHS Logo" class="nhs-logo">
    </a>
    <h1>NHS login</h1>
</div>

<div class="form-container">
    <h2>ACCOUNT LOGIN:</h2>
    <form class="login-form" action="login.php" method="post">
        <label for="email">Enter your Email Address</label>
        <input type="email" id="email" name="email" required>
        
        <label for="password">Enter your Password</label>
        <input type="password" id="password" name="password" required>
        
        <input type="submit" value="Login">
        </form>
        <?php
$email = $_POST['email'];
$pass = $_POST['password'];

if (($email == 'john.smith@example.com') and ($pass == '123456')){
    header ("Location: medialogin.php");
} else {
    echo "Invalid email or password.";
}
?>
    <a href="#" class="link">Forgot your Password?</a>
    <br>
    <a href="media.php" class="link">Continue as Guest</a>

</div>

<a href="reg.php" class="create-account">Create Account</a>
<footer>
        <div class="container">
            <!-- Footer content -->
            <p>&copy; 2024 NHS. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>