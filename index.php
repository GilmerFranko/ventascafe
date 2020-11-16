<!DOCTYPE html>
<html>
<head>
	<title>Iniciar Seccion</title>
	<link rel="stylesheet" type="text/css" href="/Codigo/css/mihojadeestilos.css">
	<style>
		body{
			background-clip:;
			font-family: Arial;
			font-weight: lighter;
		}
		html{
			display: inline;
		}
		img{
			position: absolute;
			z-index: 2;
			filter:blur(3px);
			top:0;
			left:0;
		}
		button{
			border:none;
			background: orange;
			height: 25px;
			width: 100%;
			text-align: center;
		}
		#formulario_iniciar_sesion {

			margin-top: 50px;
			position: relative;
			z-index: 3;
		}

		table{
			padding: 10px;
			background-color: rgba(225,225,225,0.5);
			border:solid 1px #575757;

		}

		#formulario_iniciar_sesion form h2{
			color:black;
		}
		#formulario_iniciar_sesion form input{
			margin-bottom: 10px;
		}
		a{
			text-decoration: none;
			color:#505050;
		}
		a:hover{
			color:black;
		}
		#clave_incorrecta{

		}
		#fontsmall{
			color:black;
			display: inline;
			font-size:12px;
		}
	</style>
</head>
<body>
	<div id="clave_incorrecta">
		<?php


			require "Codigo/sql/login/comprueba_login.php";
			$prueba=new CompruebaLogin();
			$prueba->CompruebaLoogin();

		 ?>
	</div>
	<img src="Images/wallpaper_no_mans_sky_01_1440x900.jpg " width="100%" height="100%">
	<div id="formulario_iniciar_sesion" align="center">
		<form action="" method="post">
		<table>
			<tr><td><h2>Inicia Weon</h2></td></tr>
			<tr>
				<td><input type="text" placeholder="como te llamas chamo" name="usuario"></td></tr>
			<tr>
				<td><input type="password" placeholder="pon tu clave aqui" name="clave"></td></tr>
			<br>
			<tr>
				<td><?php $prueba->hola(); ?></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="recordar"> <p id="fontsmall">marca este beta </p></td>
			</tr>
			<tr><td><button type="submit">Entra papi</button></td></tr>
			<tr>
			</tr>
		</table>
		</form>

	</div>
</body>
</html>