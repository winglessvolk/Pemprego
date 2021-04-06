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

<?php
include_once "header.php";
?>

<!-- fim header -->

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
<?php include_once "footer.php" ?>
</body>
</html>
