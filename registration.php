<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="css/registration.css">
</head>

<body>
    <div class="registration">
        <div class="logo">
            <img src="images/ndinga_logo.png" alt="" id="logo">
        </div>
        <div class="registration-container">
            <form class="registration-form" action="register.php" method="post">
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"> <?php echo $_GET['error']; ?></p>
                <?php } ?>
                <input type="text" name="username" placeholder="Username" required>
                <input type="text" name="name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email Address" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                <button type="submit">Register</button>
                <p>Already have an account? <a href="index.php">Login</a></p>
            </form>
        </div>
    </div>
</body>

</html>