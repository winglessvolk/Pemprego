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

<header>

        <!-- navigation -->
        <div class="navbar">

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
				    <li><a href="ads.php">Ofertas</a></li>
				    <li><a href="index.php">Home</a></li>
                <img src="images\logo.png" alt="logotipo" class="avatar" height="75" width="75">
  			    </ul>
                  <br><br>


        </div>
        <!-- Navigation end -->

</header>

<!-- fim header -->


<!--início main-content-->
    <hr class="hr">
		<div class="controls">
				<a href="newad.php" class="button-green">Inserir novo anuncio</a>
		</div>
		<hr class="hr">
<!-- Aqui é suposto apresentarem-se os anúncios da bd, mas nao funciona -->
		 <?php
		$sql = "SELECT name, job, contacts, description FROM ads;";
		$result = mysqli_query($link, $sql);
		$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					while($row = mysqli_fetch_assoc($result)) {
						echo "<br> Posição: ". $row["job"]. " Empregador: ". $row["name"]. " Descrição: ". $row["description"];
					}
				}
				else {
					echo "Sem anúncios";
				}

		?>
<!--fim main-content-->



<!-- início footer-->

	<div class="footer"><p>&copy;Todos os direitos reservados</p></div>

<!--fim footer-->
</div>
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
