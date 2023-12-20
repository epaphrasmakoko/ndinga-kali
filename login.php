<?php
session_start();
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $uname = $_POST['username'];
    $pass = $_POST['password'];

    if (empty($uname) || empty($pass)) {
        header("Location: index.php?error=User and password are required");
        exit();
    }

    $sql = "SELECT id, user_name, password FROM users WHERE user_name=?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: index.php?error=SQL Error");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $uname);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            $passwordHash = $row['password'];

            if (password_verify($pass, $passwordHash)) {
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['id'] = $row['id'];
                header("Location: home.php");
                exit();
            } else {
                
                header("Location: index.php");
                exit();
            }
        } else {
            header("Location: index.php?error=Username not found");
            exit();
        }
    }

} else {
    header("Location: index.php");
    exit();
}
mysqli_close($conn);
?>