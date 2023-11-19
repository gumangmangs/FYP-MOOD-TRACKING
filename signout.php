<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['username'])) {
    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page or any other page you want
    header("Location: signin.php"); // Change this to your desired page
    exit();
} else {
    // If the user is not logged in, redirect them to the login page
    header("Location: signin.php"); // Change this to your login page
    exit();
}
?>

</body>
</html>