<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
//declaring variables
$tod = "";
//functionality for later            
$time = date("H:i:s");
if ($time >= "06:00:01") {
    $tod = "morning";
} elseif ($time >= "14:00:01") {
    $tod = "Afternoon";
} elseif ($time >= "19:00:01") {
    $tod = "Night";
}


?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Good <?php echo $tod; ?>, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
    <div>
        use mee.. use meeeeee!
    </div>
    <div>
    <a href="userarea.php"><button>Página de teste do token de login</button></a>
    </div>
    <br>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
    &copy; 2021-<?php echo date("Y");?>
</body>
</html>