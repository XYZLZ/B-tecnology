<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, user-scalable=no, initial-scale=1, maximun-scale=1, minimun-scale=1">
	<link rel="stylesheet" type="text/css" href="css/formulario.css">
	<link rel="icon" type="image/jpg" href="img/logo.jpg">
</head>
<body>

	<header>
	<div class="contenedor">
		<h1 class="icon-laptop">Tecnologia</h1>
		<input type="checkbox" id="menu-bar">
		<label class="icon-menu" for="menu-bar"></label>
		<nav class="menu">
		    <a href="index.html">Inicio</a>
		    <a href="tecnologia.html">Tecnologia</a>
		    <a href="blog.html">Blog</a>
		    <a href="#">Contacto</a>
		</nav>
	</div>
</header>


	<form action="php/php.php" method="post">
		<h2>Contato</h2>
	<input type="text" name="name" placeholder="name" required>
	<input type="text" name="email" placeholder="email" required>
	<input type="text" name="asunto" placeholder="asunto" required>
	<textarea name="mensaje" placeholder="Escriba aqui su mensaje" required></textarea>
	<input type="submit" value="Enviar" id="boton" name="enviar">
	</form>

	<?php

	include("php/php.php");

	?>

	<footer>
	<div class="contenedor">
		<p class="copy"> B-Tecnology &copy; 2020</p>
		<div class="sociales">
			<a class="icon-facebook-official" href=""></a>
			<a class="icon-twitter" href=""></a>
			<a class="icon-instagram" href=""></a>
			<a class="icon-gplus-squared" href=""></a>
		</div>
	</div>
</footer>

</body>
</html>