<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Default description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Default title</title>
    <script type="module" src="dist/js/main.min.js"></script>
    <link rel="stylesheet" href="dist/css/main.min.css">
</head>
<body>
<?php 

// error checks
require "error_check.php";

// db connection
require "auth/config.php";

// Display connection 
echo 'Database connection test <br>';

// Insert query
$query = "SELECT * FROM `testing`";

// establish connection
$result = mysqli_query($conn, $query);

// fetch db
while ($row = mysqli_fetch_array($result)) {
    echo $row['title'];
    echo $row['date'];
}

// Do basic styling

?>
</body>
</html>


