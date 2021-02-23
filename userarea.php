<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>wlecome <?php $username?> </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <br>
Filler. Lorem ipsum I don't speak japanese.
<br>
<a href="welcome.php"><button>Regressar</button></a>
<br>
<a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
<br>
</body>
</html>