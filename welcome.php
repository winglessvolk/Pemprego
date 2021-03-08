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
$time = date("H:i:s");
if ($time >= "06:00:01" && <= "13:59:01") {
    $tod = "morning";
} elseif ($time >= "14:00:01" && <= "18:59:00") {
    $tod = "Afternoon";
} elseif ($time >= "19:00:01") {
    $tod = "Night";
}
echo $tod;
echo $time;
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="css\reset.css">
    <link rel="stylesheet" href="css\default.css">
    <link rel="stylesheet" href="css\welcome.css">

</head>
<body>
    <div class="container">
    <div>
            <h1>Good <?php echo $tod; ?>, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></h1>
        </div>
        <!-- navigation -->
        <div>        		
		    <nav class="topnav">			
  			    <ul class="topnav a">
                    
                    <li class="dropdown">
                    <a href="login.php"><img src="images/male.png" width="50px" height="50px" alt="Usuário" class="dropbtn"/></a>
                            <div class="dropdown-content">
                                <a href="logout.php">Terminar Sessão</a>
                                <a href="userarea.php">Conta</a>
                                <a href="unused.php">Vazio</a>
                            </div>
                    </li>                        
    			    <li><a href="#">Notícias</a></li>
				    <li><a href="#">Ofertas</a></li>
				    <li><a href="index.php">Home</a></li>
				    <li><img src="images\logo.png" alt="logotipo" class="avatar" height="75" width="75"></li>				
  			    </ul>
                  <br><br>	
		    </nav>
        </div>
        <!-- Navigation end -->
        <br><br>
        <hr class="hr">
        <br><br>
        <div class="controls">
        <p> 
            <a href="reset-password.php" class="button-red">Reset Your Password</a>
            <a href="logout.php" class="button-yellow">Sign Out of Your Account</a>
        </p>
        </div>
        <br><br>
        <hr class="hr">
        <div class="footer">
        &copy; 2021-<?php echo date("Y");?>
        </div>
    </div>
</body>
</html>