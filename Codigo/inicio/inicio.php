<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="iso-8559-1"/>
	<meta name="description" content="pagina de enseñanza html5"/>
	<meta name="keywords" content="html5, css3, Javascript, diseño web"/>
	<meta charset="utf-8">
	<title>Inicio</title>
	<link rel="stylesheet" href="/Codigo/css/mihojadeestilos.css"/>
	<script src="/Codigo/script/jquery-3.4.1.min.js"></script>
	<script src="/Codigo/script/Interacciones.js"></script>

</head>

<body>
	<?php //Navegacion
		session_start();
		if(!isset($_SESSION['usuario'])){
			header("location:/index.php");
			$id=$_SESSION['id'];
			die;
		}
		require "../barras/navegacion.html";
		require "../barras/barra_lateral_inicio.html";
	?>
	<section>
		<article>
			<header>
				<hgroup>
					<h1>Noticias Del Dia</h1>
					<p>Editar</p>

				</hgroup>
			</header>
		<figure>
			<div id="contenedorclose"><p id="close">X</p></div>
		<img src="/	Images/wallpaper_no_mans_sky_01_1440x900.jpg" width="420" height="420" class="imagen" />
			<figcaption>
			<input type="checkbox" name="botones" id="cajabox"/>
			Preciona la casilla para transformar.
			</figcaption>
		</figure>

		<br>
		<p></p>
		</article>
	</section>
	

</body>
</html>
