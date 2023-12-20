<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="login">
        <div class="logo">
            <img src="images/ndinga_logo.png" alt="" id="logo">
        </div>
        <div class="login-container">
            <form class="login-form" action="login.php" method="post">
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"> <?php echo $_GET['error']; ?></p>
                <?php } ?>
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
                <p>I don't have an Account <a href="registration.php">Register</a>
            </form>
        </div>
    </div>

</body>

</html>