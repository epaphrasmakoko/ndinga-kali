<?php
session_start();
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    //Validate the inputs from user (client_side)
    $username = validate($_POST['username']);
    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $confirm_password = validate($_POST['confirm_password']);

    if (empty($username) || empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
        header("Location: registration.php?error=All fields are required");
        exit();
    } elseif ($password !== $confirm_password) {
        header("Location: registration.php?error=Passwords do not match");
        exit();
    } else {
        // Check if the username and email is already in use
        $sql = "SELECT * FROM users WHERE user_name=?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, "SELECT * FROM users WHERE user_name=? OR email=?")) {
            header("Location: registration.php?error=SQL Error");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $username, $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                if ($row['user_name'] === $username) {
                    header("Location: registration.php?error=Username is already taken");
                    exit();
                } elseif ($row['email'] === $email) {
                    header("Location: registration.php?error=Email is already taken");
                    exit();
                }
            } else {
                // Hash the password securely
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                // Insert user data into the database
                $insert_sql = "INSERT INTO users (user_name, name, email, password) VALUES (?, ?, ?, ?)";
                $insert_stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($insert_stmt, $insert_sql)) {
                    header("Location: registration.php?error=SQL Error");
                    exit();
                } else {
                    mysqli_stmt_bind_param($insert_stmt, "ssss", $username, $name, $email, $hashed_password);
                    mysqli_stmt_execute($insert_stmt);
                    header("Location: index.php?success=Registration successful");
                    exit();
                }
            }
        }
    }
} else {
    header("Location: registration.php");
    exit();
}
mysqli_close($conn);
