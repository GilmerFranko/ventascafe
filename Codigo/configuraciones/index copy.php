<!DOCTYP Ehtml>
<html>
<head>
	<title>Bodega</title>
	<link rel="stylesheet" type="text/css" href="/Codigo/css/barras/estilos_barra_navegacion.css">
	<script src="/Codigo/script/jquery-3.4.1.min.js"></script>
	<script src="/Codigo/script/Interacciones.js"></script>
	<link rel="stylesheet" type="text/css" href="/Codigo/css/mihojadeestilos.css">
	<meta name="viewport" content="width=device-width, maximum-scale=1, user-scalable=no"/>

</head>
<body>
	<div id="barras" >
	<?php
		/*session_start();
			if(!isset($_SESSION['usuario'])){
				header("location:/index.php");
				die;
			}
*/
		//Navegacion
		require_once "../../Codigo/barras/navegacion.html";
		require_once "../../Codigo/barras/barra_lateral_configuraciones.php";
	?>
</body>
</html>