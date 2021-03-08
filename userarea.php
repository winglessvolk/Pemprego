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
    <br>
Palavras, palavinhas e palavretas, mas no entanto a página continua do tamanho de uma
galheta.
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