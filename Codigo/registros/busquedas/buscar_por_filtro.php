<!DOCTYPE HTML> 
<html lang="ese">
<head>
	<meta charset="iso-8559-1"/>
	<meta name="description" content="pagina de enseñanza html5"/>
	<meta name="keywords" content="html5, css3, Javascript, diseño web"/>
	<meta charset="utf-8">
	<title>Buscar Por Filtro</title>
	<link rel="stylesheet" href="/Codigo/css/mihojadeestilos.css"/>
	<script src="/Codigo/script/Interacciones.js"></script>
	<script src="/Codigo/script/jquery-3.4.1.min.js"></script>
	<meta name="viewport" content="width=device-width, maximum-scale=1, user-scalable=no"/>
</head>

<body>
	<?php //Navegacion
		require "../../barras/navegacion.html";
		require "../../barras/barra_lateral_registros.html";

	?>
	<section>
		<article>
			<header>
				<hgroup>
					<h1>Registros</h1>
				</hgroup>
			</header>
		</article>
		
		<p>Introduzca Su Filtro</p>
		<form action="">
			<input type="text" name="filtrodebusqueda" placeholder="Cedula">
			<button type="submit">
				Buscar
			</button>
			<br><br>
		</form>
		<div>
			<?php
			require "../../registros/busquedas/comprueba.php";
			?>
		</div>
	</section>
</body>
</html>
<