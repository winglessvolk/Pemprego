
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

<?php
include_once "header.php";
?>

<!-- fim header -->
<div class="form">
  <h2>Introduza os dados do anuncio</h2>
  <form action="newad.php" method="post">
     <p class="p1">
        Nome da Empresa: <input type="text" name="name"><br>
        Posição Disponivel: <input type="text" name="job"><br>
        Contactos: <input type="text" name="contacts"><br>
        Descrição: <input type="texbox "name="description" rows="5" cols="40"><br>
        <input type="submit" name="enviar">
    </p>

  </form>
</div>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<?php
require "config.php"; //Required for db insert, and not once for multiple entry on same page load
// define variables and set to empty values and then populates them with form values
$name = $job =  $description = $contacts = "";

//checks if the fields have data and uses said data to populate variables
if (empty($_POST["name"])) {
      "<h3>Nome em falta</h3>";
  } else {
        $name = $_POST["name"]; // declares $name and gives it value
    }
if (empty($_POST["job"])) {
    "<h3>Posto em falta</h3>";
  } else {
      $job = $_POST["job"];
  }
if (empty($_POST["contacts"])) {
    "<h3>Sem contactos</h3>";
      $contacts = $_POST["contacts"];
  }
if (empty($_POST["description"])) {
    "<h3>Descrição Vazia</h3>";
  } else {
      $description = $_POST["description"];
  }
  echo $_POST["enviar"];
  // let's talk to the db
  // pull the var $link from config which already established a connection if possible

if (isset($_POST["enviar"])){
  $sql = "INSERT INTO ads (name, job, contacts, description) VALUES ('$name', '$job', '$contacts', '$description')";
  if ($link->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso";
    } else {
    echo "Erro: " . $sql . "<br>" . $link->error;
    }

  $link->close();
  }




?>
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
</body>
</html>
