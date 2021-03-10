
<!DOCTYPE HTML>  
<html>
<head>
<title>Novo Anuncio</title>
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

<h2>Introduza os dados do anuncio</h2>

<form action="newad.php" method="post">
    Nome da Empresa: <input type="text" name="name"><br>
    Posição Disponivel: <input type="text" name="job"><br>
    Contactos: <input type="text" name="contacts"><br>
    Descrição: <input name="description" rows="5" cols="40"><br>
  <input type="submit">
</form>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<?php
require "config.php"; //Required for db insert, and not once for multiple entry on same page load
// define variables and set to empty values and then populates them with form values
$name = $job =  $description = $contact = "";

//checks if the fields have data and uses said data to populate variables
    if (empty($_POST["name"])) {
      echo $empty = "<h3>Nome em falta</h3>"; //declares var $empty and displays it
    } else {
        $name = $_POST["name"]; // declares $name and gives it value
    }

if (empty($_POST["job"])) {
    echo $empty = "<h3>Posto em falta</h3>"; 
  } else {
      $job = $_POST["job"];
  }
  if (empty($_POST["contacts"])) {
    echo $empty = "<h3>Sem contactos</h3>"; 
      $contacts = $_POST["contacts"];
  }
  if (empty($_POST["description"])) {
    echo $empty = "<h3>Descrição Vazia</h3>"; 
  } else {
      $description = $_POST["description"];
  } 
  
  // let's talk to the db
  // pull the var $link from config which already established a connection if possible

$sql = "INSERT INTO ads (name, job, contacts, description)
VALUES ('$name', '$job', '$contact', '$description')";

if ($link->query($sql) === TRUE) {
  echo "Dados inseridos com sucesso";
} else {
  echo "Erro: " . $sql . "<br>" . $link->error;
}

$link->close();
?>

&copy; 2021-<?php echo date("Y");?>
</body>
</html>