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

          	<div class="content">

          		<h4>Segue-nos</h4>

          			<ul>
          				<li><a href="https://www.facebook.com/" target="_blank"></a><b>Facebook</b></li>
          				<li><a href="https://www.instagram.com/" target="_blank"></a><b>Instagram</b></li>
          				<li><a href="https://www.twitter.com/" target="_blank"></a><b>Twitter</b></li>
          				<li><a href="https://www.youtube.com/" target="_blank"></a><b>Youtube</b></li>
          			</ul>

          		<center>
          		<form>
          			<h4>Contacta-nos</h4>
          				<p><label>Nome</label>&nbsp;<input type="text"></p>
          		  		<p><label>Sobrenome</label>&nbsp;<input type="text"></p>
          		  		<p><label>E-mail</label>&nbsp;<input type="email" name="fn"</p>
          		  		<p><label>Assunto&nbsp;&nbsp;</label><textarea name="add" rows="3" wrap="soft"></textarea></p>
          		  		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="submit">&nbsp;&nbsp;</label><label><input type="reset" value="Apagar"></label></p>
          		</form>
          	</center>

          	</div>

          <!--fim div content formulário-->
        &copy; 2021-<?php echo date("Y");?>
        </div>
    </div>
</body>
</html>
