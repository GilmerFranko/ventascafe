<!DOCTYPE HTML> 
<html lang="ese">
<head>
	<meta charset="iso-8559-1"/>
	<meta name="description" content="pagina de enseñanza html5"/>
	<meta name="keywords" content="html5, css3, Javascript, diseño web"/>
	<meta charset="utf-8">
	<title>Registros</title>
	<link rel="stylesheet" href="/Codigo/css/mihojadeestilos.css"/>
	<link rel="stylesheet" type="text/css" href="/Codigo/css/registros/registrar_datos.css">
	<script src="/Codigo/script/Interacciones.js"></script>
	<script src="/Codigo/script/jquery-3.4.1.min.js"></script>
	

</head>

<body>
	<?php 

		session_start();
			if(!isset($_SESSION['usuario'])){
				header("location:/index.php");
				die;
			}

		//Navegacion
		require_once "../../Codigo/barras/navegacion.html";
		require_once "../../Codigo/barras/barra_lateral_registros.html";
		
	?>
	<section>
	<div id="form_nueva_fila">
	<form action="/Codigo/sql/registros/registrar/insertar_datos_vehiculos.php">
		<div>
			<p>Nombre</p>
			<input name ="nombre_provehiculo" type="text" placeholder="Gilmer">
			</input>
		</div>
		<div>
			<p>Apellido</p>
			<input name ="apellido_provehiculo" type="text" placeholder="Franko">
			</input>
		</div>	
		<div>
			<p>C.I</p>
			<input name ="CI" type="text" placeholder="xx.xxx.xxx">
			</input>
		</div>
		<div>
			<p>Marca</p>
			<input name ="marca_vehiculo" type="text" placeholder="Bera">
			</input>
		</div>
		<div>
			<p>Modelo</p>
			<input name ="modelo_vehiculo" type="text" placeholder="Leon">
			</input>
		</div>
		<div>
			<p>Serial</p>
			<input name ="serial_vehiculo" type="text" placeholder="xxxxxxxxxxxxxxxxx">
			</input>
		</div>
		<div>
			<p>Placa</p>
			<input name ="placa_vehiculo" type="text" placeholder="xxxxxxx">
			</input>
		</div>
		<div>
			<p>Color</p>
			<input name ="placa_vehiculo" type="text" placeholder="Azul">
			</input>
		</div>
		<div>
			<p>Año</p>
			<select name="edad_vehiculo">
				<option label="Edad" value=2000></option>
				<option label="2001" value=2000></option>
				<option label="2002" value=2000></option>
				<option label="2003" value=2000></option>
				<option label="2004" value=2000></option>
				<option label="2005" value=2000></option>
				<option label="2006" value=2000></option>
				<option label="2007" value=2000></option>
				<option label="2008" value=2000></option>
				<option label="2009" value=2000></option>
				<option label="2010" value=2000></option>
				<option label="2011" value=2000></option>
				<option label="2012" value=2000></option>
				<option label="2013" value=2000></option>
				<option label="2014" value=2000></option>
				<option label="2015" value=2000></option>
				<option label="2016" value=2000></option>
				<option label="2017" value=2000></option>
				<option label="2018" value=2000></option>
				<option label="2019" value=2000></option>
				<option label="2020" value=2000></option>
			</select>
		</div>
		<div>
			<p></p>
			<select name="ubicacion_vehiculo">
  				<option label="Ubicacion"></option>
  				<option label="Quebrada Amarilla" value=""></option>
  				<option label="Quebrada Amarilla" value=""></option>
  				<option label="Quebrada Amarilla" value=""></option>
  				<option label="Quebrada Amarilla" value=""></option>
  				<option label="Quebrada Amarilla" value=""></option>
			</select>
		</div>
		<div>
			<select name="tipo_vehiculo">
				<option label="Moto"></option>
				<option label="Carro"></option>
			</select>
		</div>
			<br>
			<br>
			<button>
				Registrar
			</button>
		<?php
		require '../sql/registros/registrar/insertar_datos_vehiculos.php';
		?>
			
	</form>
	</div>
</section>
</body>
</html>
<