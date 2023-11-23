<?php


// error checks
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "db.php";

// Database connecting
$conn   = new mysqli($host, $user, $password, $database);

// Error handling
if ($conn->connect_error) {
    die("Connection failed: ").$conn->connect_error;
}
