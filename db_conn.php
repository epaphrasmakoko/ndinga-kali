<?php

$db_servername = "localhost";
$db_username = "root";
$db_password = "";
$database = "ndinga";

// Create a connection to the database
$conn = mysqli_connect($db_servername, $db_username, $db_password, $database);

// Check the connection and handle errors
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set the character set to UTF-8 (optional, but recommended)
//mysqli_set_charset($conn, "utf8");

// You can add more configurations and settings here if needed

