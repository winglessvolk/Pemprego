<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css\reset.css">
<link rel="stylesheet" href="css\main.css">
<link rel="stylesheet" href="css\auxiliary.css">
</head>
<body>

<?php
require "config.php";
$link // ligação ao msql
$name = $job = $contacts = $description = "";
$sql = "SELECT * FROM ads (name, job, contacts, description)";



?>
<h2>Opção de carreira!</h2>
<div class="card">
  <img src="images/logo.png" alt="Avatar" style="width:100%">
  <div class="adcard">
    <h4><b><?php $nome?></b></h4> 
    <p><?php $job?></p> 
    <p><?php $contacts?></p>
    <p><?php $description?></p>
  </div>
</div>

</body>
</html> 
