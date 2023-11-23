<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="module" src="dist/js/main.min.js"></script>
    <link rel="stylesheet" href="dist/css/main.min.css">
</head>
<body>
<?php 

// error checks
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// db connection
require "auth/config.php";

// php test
echo 'Database connection test <br>';

// query
$query = "SELECT * FROM `testing`";

// establish connection
$result = mysqli_query($conn, $query);

// fetch db
while ($row = mysqli_fetch_array($result)) {
    echo $row['title'];
    echo $row['date'];
}

?>
</body>
</html>


