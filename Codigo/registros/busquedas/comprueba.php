<link rel="stylesheet" href="estilosdetabla.css"/>
<style>
	#resultado{
	background:white;
	border-collapse: separate;
	padding:1px;
	width:100%;
	}
	#nombresdecolumnas{
		color: black;
		display: inline;
	}
</style>
<?php
	$conexion=mysqli_connect('localhost','root','','datos_cafe');
	/*if(mysqli_num_rows($resultado)>0){

		header("Location:index.php");

	}else{
		header("Location:Index.html");
	}

*/

	if (isset($_GET['filtrodebusqueda'])and !empty($_GET['filtrodebusqueda'])){
		$filtro=$_GET['filtrodebusqueda'];
		//$resultado
		$consulta="SELECT * FROM ventas where Cedula='$filtro' ";
		$resultado=mysqli_query($conexion, $consulta);
		if (!$resultado){
			echo "<table style='background:black;padding:5px;width:100%'>
					<tr>
						<td style=border:0;background:black;color:white>Sin Resultado Menor</td>
					</tr></table>";
				return false;

		}
		if(mysqli_num_rows($resultado)>0){


			echo "<table style='background:black;border-collapse:collapse;padding:5px;width:100%'>
					<tr>
						<td style=border:0;background:orange;color:black;width=3px;><b>Busqueda: $filtro</b></td>
					</tr></table>";
			echo "<table id='resultado'>";
			echo "<tr><td><p id='nombresdecolumnas'>ID</p></td>";
			echo "<td><p id='nombresdecolumnas'>Nombre</p></td>";
			echo "<td><p id='nombresdecolumnas'>Apellido</p></td>";
			echo "<td><p id='nombresdecolumnas'>C.I</p></td>";
			echo "<td><p id='nombresdecolumnas'>M/C</p></td>";
			echo "<td><p id='nombresdecolumnas'>Marca</p></td>";
			echo "<td><p id='nombresdecolumnas'>Modelo</p></td>";
			echo "<td><p id='nombresdecolumnas'>Serial</p></td>";
			echo "<td><p id='nombresdecolumnas'>Placa</p></td>";
			echo "<td><p id='nombresdecolumnas'>Color</p></td>";
			echo "<td><p id='nombresdecolumnas'>Edad</p></td>";
			echo "<td><p id='nombresdecolumnas'>Ubicacion</p></td>";
			echo "<td><p id='nombresdecolumnas'></p></td></tr>";



			while ($fila=$resultado->fetch_row()){

				if (isset($_GET['filtrodebusqueda'])and !empty($_GET['filtrodebusqueda'])){

					echo "<tr><td style='border:0;background:#006CAA;color:black'>$fila[0]</td>";
					echo "<td style='border:0;background:#006CAA;color:black'>$fila[1]</td>";
					echo "<td style='border:0;background:#006CAA;color:black'>$fila[2]</td>";
					echo "<td style='border:0;background:#006CAA;color:black'>$fila[3]</td>";
					echo "<td style='border:0;background:#006CAA;color:black'>$fila[4]</td>";
					echo "<td style='border:0;background:#006CAA;color:black'>$fila[5]</td>";
					echo "<td style='border:0;background:#006CAA;color:black'>$fila[6]</td>";
					echo "<td style='border:0;background:#006CAA;color:black'>$fila[7]</td>";
					echo "<td style='border:0;background:#006CAA;color:black'>$fila[8]</td>";
				}


			}
		}else{
		echo "<tr><td style='color:white'>Sin resultados</td></tr>";

		}
		echo "</table>";
	}else{
		echo "<table style='background:black;padding:5px;width:100%'>
					<tr>
						<td style=border:0;background:black;color:white>Resultados aqui</td>
					</tr></table>";
	}
?>