<?php
// Creating a session
session_start();

// Define database connection constants
$db_host = "localhost:3306";
$db_user = "admin";
$db_passwd = "Admin@123";
$db_name = "carrental";

// Create DB Connection
$conn = new mysqli($db_host, $db_user, $db_passwd, $db_name);

// Checking DB Connection
if ($conn->connect_error) {
    die("Database Connection Error: " . $conn->connect_error);
}

// Saving Connection variable in Session
$_SESSION['DB'] = $conn;
 