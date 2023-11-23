<?php

// Get the current HTTP host
$hostServer = $_SERVER['HTTP_HOST'];

// Check if the application is running on localhost
if ($hostServer == 'localhost') {

    // Local database configuration
    $host     = 'db';
    $user     = 'dockerstart';
    $password = 'qwerty';
    $database = 'dockerstart';

} else {
    // Online (remote) database configuration
    $host       = "localhost";
    $user       = "";
    $password   = "";
    $database   = "";
}

