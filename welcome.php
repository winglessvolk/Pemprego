<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

//declaring variables
$tod = ""; //time of day
//functionality for later
$hour = date("H");

//date_default_timezone_set("Lisbon"); set time zone
if (($hour > 06) && ($hour <= 13)){
    $tod = "Bom dia ";
} elseif (($hour > 13) && ($hour <= 17)){
    $tod = "Boa tarde ";
} elseif (($hour > 17) && ($hour <= 23)){
    $tod = "Boa noite ";
} else {
    $tod = "Madrugada, ";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="css\reset.css">
    <link rel="stylesheet" href="css\main.css">
    <link rel="stylesheet" href="css\auxiliary.css">

</head>
<body>
<div class="container">
<!-- início header -->

<?php
include_once "header.php";
?>


<!-- fim header -->

    <div>
            <h1><?php echo $tod; ?><b><?php echo htmlspecialchars($_SESSION["username"]); echo ", são agora "; echo date("H:i"); ?></b></h1>
        </div>
        <br><br>
        <hr class="hr">
        <br><br>
        <div>
        <p>
            Content here, maybe a picture of a bird.
        </p>
        </div>
        <br><br>
        <hr class="hr">
        <div class="footer">
          <!-- início div content formulário-->
<?php include_once "footer.php" ?>
</body>
</html>
