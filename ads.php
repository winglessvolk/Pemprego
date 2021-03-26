<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="css\reset.css">
	<link rel="stylesheet" href="css\main.css">
    <link rel="stylesheet" href="css\auxiliary.css">
<meta charset="utf-8">
<title>Forum</title>
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
				    <li><a href="ads.php">Ofertas</a></li>
				    <li><a href="index.php">Home</a></li>
                <img src="images\logo.png" alt="logotipo" class="avatar" height="75" width="75">
  			    </ul>
                  <br><br>


        </div>
        <!-- Navigation end -->

</header>

<!-- fim header -->

	<hr class="hr">

<!--início main-content-->
    <hr class="hr">
		<div class="controls">
				<a href="newad.php" class="button-green">Novo anuncio</a>
		</div>
<!--fim main-content-->

    <hr class="hr">

<!-- início footer-->

	<div class="footer"><p>&copy;Todos os direitos reservados</p></div>

<!--fim footer-->
</div>
&copy; 2021-<?php echo date("Y");?>
</body>
</html>
