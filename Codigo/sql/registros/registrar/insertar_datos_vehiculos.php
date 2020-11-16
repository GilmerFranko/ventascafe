	<?php
	$conexion=mysqli_connect('localhost','root','','datos_cafe');
	echo "<div style='display:none;'>";
		$nombre=$_GET['nombre_provehiculo'];
		$apellido=$_GET['apellido_provehiculo'];
		$CI=$_GET['CI'];
		$tipo=$_GET['tipo_vehiculo'];
		$marca=$_GET['marca_vehiculo'];
		$modelo=$_GET['modelo_vehiculo'];
		$serial=$_GET['serial_vehiculo'];
		$placa=$_GET['placa_vehiculo'];
		$color=$_GET['color_vehiculo'];
		$edad=$_GET['edad_vehiculo'];
		$ubicacion=$_GET['ubicacion_vehiculo'];
		echo "</div>";

	if (isset($_GET['CI'])and !empty($_GET['CI'])){

		$consulta="INSERT INTO vehiculo_alcaldia (Nombres,Apellidos,Cedula,Vehiculo,Marca,Modelo,Seriall,Placa,Color,Edad,Ubicacion) VALUES('$nombre','$apellido','$CI','$tipo','$marca','$modelo','$serial','$placa','$color','$edad','$ubicacion')";
		$resultado=mysqli_query($conexion, $consulta);
		if ($resultado==false){
			echo "Error en la consulta";
		}else{
			echo "Se ha Registrado con exito!";
		}}
		/*if (!$resultado){
			echo "<table style='background:black;padding:5px;width:100%'>
					<tr>
						<td style=border:0;background:black;color:white>Sin Resultado Menor</td>
					</tr></table>";
				return false;

		}
		if(mysqli_num_rows($resultado)>0){


			echo "<table style='background:black;border-collapse:collapse;padding:5px;width:100%'>
					<tr>
						<td style=border:0;background:orange;color:black><b>Busqueda: $filtro</b></td>
					</tr>";
			while ($fila=mysqli_fetch_array($resultado,MYSQLI_ASSOC)){

				if (isset($_GET['filtrodebusqueda'])and !empty($_GET['filtrodebusqueda'])){

					echo "<tr><td style='border:0;background:#006CAA;color:black'>$fila[$filtro]</td></tr>";
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
	}*/
?>