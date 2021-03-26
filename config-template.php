<?php
/*
Este template segue as recomendações do seguinte link: https://git-scm.com/docs/gitfaq#ignore-tracked-files

O propósito deste template é exclusivamente ser duplicado localmente e atribuir à nova cópia o nome "config.php".
É no novo ficheiro "config.php" que deveremos definir as credenciais para conectar com a BD.
O ficheiro ".gitignore" já está configurado para ignorar o ficheiro "config.php", o que faz com que pulls e pushes sejam mais seguros
pois evita-se o risco de se trocar as configurações de ligação à BD uns aos outros.
---
Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '4628'); //Inserir aqui password da bd local
define('DB_NAME', 'portal');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
