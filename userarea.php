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
    <title>Bem vindo <?php echo htmlspecialchars($_SESSION["username"]); ?> </title>
     <!-- the $username doesn't work because the var isn't present in this scope,
      fixed by including the file that has the var declared -->
    <link rel="stylesheet" href="css\reset.css">
    <link rel="stylesheet" href="css\default.css">
</head>
<body>
    <hr class="hr">
        <!-- navigation -->
        <div>        		
		    <nav class="topnav">			
  			    <ul class="topnav a">
				    <li><a href="login.php"><img src="images/male.png" width="50px" height="50px" alt="Usuário"/></a></li>    			
    			    <li><a href="#">Notícias</a></li>
				    <li><a href="#">Ofertas</a></li>
				    <li><a href="index.php">Home</a></li>
				    <li><img src="images\logo.png" alt="logotipo" class="avatar" height="75" width="75"></li>				
  			    </ul>	
		    </nav>
        </div>
        <!-- Navigation end -->
    <br>
    <a href="welcome.php"><button>Regressar</button></a>
    <br>

<a href="newad.php"><button>Novo anuncio</button></a>
<br>
<a href="logout.php" class="button">Terminar Sessão</a>
<br>
&copy; 2021-<?php echo date("Y");?>
</body>
</html>