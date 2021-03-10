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
        <br>
        <a href="welcome.php"><button>Regressar</button></a>
        <br>
    </div>
    <div class="controls">
        <a href="newad.php"><button>Novo anuncio</button></a>
        <br>
        <a href="reset-password.php" class="button-red">Alterar Palavra-chave</a>
    </div>

&copy; 2021-<?php echo date("Y");?>
</body>
</html>