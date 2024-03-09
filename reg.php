<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>NHS Registration Page</title>
<link rel="stylesheet" href="nhs.css">
<style>
    .registration-form input[type="text"],
    .registration-form input[type="email"],
    .registration-form input[type="number"] {
        width: calc(50% - 33px);
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #cccccc;
        border-radius: 5px;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1); 
    }
    .form-row {
        display: flex;
        justify-content: space-between;
    }

    .form-row input[type="text"] {
        margin-right: 10px; 
    }

    .registration-form input[type="submit"] {
        width: 100px;
        padding: 10px;
        margin-right: 60px;
        background-color: #007f3b;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .registration-form input[type="submit"]:hover {
        background-color: #005a2b;
    }
</style>
</head>
<body>

<div class="header">
    <img src="nhslogo.jpeg" alt="NHS Logo" class="nhs-logo">
    <h1>Registration</h1>
</div>

<div class="form-label">
    <h2>REGISTRATION</h2>
</div>

<div class="form-container">
    <form class="registration-form" action="reg.php" method="post">
        <div class="form-row">
            <input type="text" name="surname" placeholder="Surname" required>
            <input type="text" name="firstName" placeholder="First Name" required>
        </div>
        <div>
            <input type="text" name="nhsNumber" placeholder="NHS Number">
            <a href="#" class="link">Don't Know your NHS Number?</a>
        </div >
        <div class="form-row">
            <input type="text" name="address" placeholder="Address" required>
            <input type="text" name="postcode" placeholder="Postcode" required>
        </div>
        <div class="form-row">
            <input type="text" name="city" placeholder="City" required>
            <input type="submit" value="Create Account">
        </div>
    </form>
</div>

<footer>
        <div class="container">
            <p>&copy; 2024 NHS. All rights reserved.</p>
        </div>
</footer>

</body>
</html>
