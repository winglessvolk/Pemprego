<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="css\reset.css">
	<link rel="stylesheet" href="css\main.css">
    <link rel="stylesheet" href="css\auxiliary.css">
<meta charset="utf-8">
<title>Homepage</title>
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

	<hr>

<!--início main-content-->

<div class="main">


<img src="images/front_u9.svg" alt="Snow">
<a href="aboutus.php"><button class="btn">Sobre Nós</button></a>

</div>

<div class="row">
	<div class="title">
		Últimas Notícias
	</div>
	<div class="column">
		<a href="#"><img src="images/u13.svg" alt=""  class="cards"/></a>
		<h4 class="tag">Don't Overthink</h4>
		<p class="text_column">blabla</p>
		<h4 class="tag">Descobre aqui que encontrar o emprego dos teus sonhos é possível</h4>
		<p class="text_column">blabla</p>
	</div>

	<div class="column">
		<a href="#"><img src="images/u14.svg" alt=""  class="cards"/></a>
		<h4>Como encontrar o emprego dos teus sonhos</h4>
		<p class="text_column">this overflows, please fix me</p>
		<button type="button" class="button">Saber Mais</button>
	</div>

	<div class="column">
				<a href="#"><img src="images/u15.svg" alt=""  class="cards"/></a>
                <h4>Como encontrar o emprego dos teus sonhos</h4>
                <button type="button" class="button">Saber Mais</button>
	</div>
	<div class="news_btn">
		<a href="news.php"><button type="button" class="button">Todas as Notícias</button></a>
	</div>
</div>

</div>

<!--fim main-content-->

<!--início section-->

	<section class="container">
		<h2 class="noDisplay">Sobre Nós</h2>
    		<article class="left_article">
     			<p>blablabla</p>
     		</article>
		<aside class="right_article"><img src="#" alt="" width="" height="" class="placeholder"/></aside>

		<h2 class="noDisplay">Fórum</h2>
    		<article class="left_article">
     			<p>blablabla</p>
	  			<button type="button" class="btn btn-link">Junta-te à discussão</button>
			</article>
		<aside class="right_article"><img src="#" alt="" width="" height="" class="placeholder"/></aside>
	</section>

<br>

<!--fim section-->

<!-- início div content formulário-->

	<div class="content">

		<h4>Segue-nos</h4>

			<ul>
				<li><a href="https://www.facebook.com/" target="_blank"></a><b>Facebook</b></li>
				<li><a href="https://www.instagram.com/" target="_blank"></a><b>Instagram</b></li>
				<li><a href="https://www.twitter.com/" target="_blank"></a><b>Twitter</b></li>
				<li><a href="https://www.youtube.com/" target="_blank"></a><b>Youtube</b></li>
			</ul>


		<form>
			<h4>Contacta-nos</h4>
				<p><label>Nome</label>&nbsp;<input type="text"></p>
		  		<p><label>Sobrenome</label>&nbsp;<input type="text"></p>
		  		<p><label>E-mail</label>&nbsp;<input type="email" name="fn" placeholder="escreve o teu e-mail"></p>
		  		<p><label>Assunto&nbsp;&nbsp;</label><textarea name="add" rows="3" wrap="soft"></textarea></p>
		  		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="submit">&nbsp;&nbsp;</label><label><input type="reset" value="Apagar"></label></p>
		</form>

	</div>

<!--fim div content formulário-->

<!-- início footer-->

	<div class="footer"><p>&copy;Todos os direitos reservados</p></div>

<!--fim footer-->
</div>
&copy; 2021-<?php echo date("Y");?>
</body>
</html>
