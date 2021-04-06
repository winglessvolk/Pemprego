<?php include_once "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css\reset.css">
	<link rel="stylesheet" href="css\main.css">
  <link rel="stylesheet" href="css\auxiliary.css">
<meta charset="utf-8">
<title>Ofertas</title>
</head>
<body>
<div class="container">
<!-- início header -->

<?php
include_once "header.php";
?>

<!-- fim header -->


<!--início main-content-->
    <hr class="hr">
		<div class="main">
		<div class="controls">
				<a href="newad.php" class="button-green">Inserir novo anuncio</a>
		</div>
		<hr class="hr">
<!-- Aqui é suposto apresentarem-se os anúncios da bd, mas nao funciona -->
<div class="title">
	Anúncios Recentes
</div>
		 <?php
		$sql = "SELECT name, job, contacts, description FROM ads;";
		$result = mysqli_query($link, $sql);
		$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						echo $row["job"]. "<br> ". $row["name"]. "<br>". $row["contacts"]. "<br>".$row["description"]. "<br><br>";
					}
				}
				else {
					echo "Sem anúncios";
				}

		?>
	</div>
<!--fim main-content-->
<?php include_once "footer.php" ?>
</body>
</html>
