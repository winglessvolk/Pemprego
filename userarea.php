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

<?php
include_once "header.php";
?>

<!-- fim header -->
<hr class="hr">
    <div class="controls">
        <a href="newad.php" class="button-green">Novo anuncio</a>
        <br><br><br>
        <a href="reset-password.php" class="button-red">Alterar Palavra-chave</a>
    </div>
<br><br><br>
&copy; 2021-<?php echo date("Y");?>
</div>
</body>
</html>
