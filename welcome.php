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
	
<header>
		
        <!-- navigation -->
        <div>        		
		    			
  			    <ul class="ul">                    
                    <li class="dropdown">
                    <a href="login.php"><img src="images/male.png" width="50px" height="50px" alt="Usuário" class="dropbtn"/></a>
                            <div class="dropdown-content">
                                <a href="logout.php">Sair</a>
                                <a href="userarea.php">Conta</a>
                                <a href="forum.php">Forum </a>
                            </div>
                    </li>                        
    			    <li><a href="#">Notícias</a></li>
				    <li><a href="#">Ofertas</a></li>
				    <li><a href="index.php">Home</a></li>				    
                <img src="images\logo.png" alt="logotipo" class="avatar" height="75" width="75">				
  			    </ul>
                  <br><br>	
		    
            
        </div>
        <!-- Navigation end -->
		
</header>

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
        &copy; 2021-<?php echo date("Y");?>
        </div>
    </div>
</body>
</html>