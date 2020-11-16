	<?php
	$conexion=mysqli_connect('localhost','root','','datos_cafe');
	date_default_timezone_set("America/Caracas");
	echo "<div style='display:none;'>";
		if ($_GET['compraventa']=='vendido'){
				$nombre=$_GET['nombre_cliente'];
				$apellido=$_GET['apellido_cliente'];
				$CI=$_GET['CI'];
				$cantidad=$_GET['cantidad_compra'];
				$cuenta=$_GET['num_cuenta'];
				$vendido=$_GET['quesevende'];
				$fecha=$_GET['fecha'];
				$status=$_GET['situacion_compra'];
				$movimiento="vendido";
				$nota=$_GET['nota'];
				$situacion="";
				echo "</div>";
			if (isset($_GET['CI'])and !empty($_GET['CI'])){
				if(isset($fecha) and !empty($fecha)){
					echo $vendido;
					$consulta="INSERT INTO ventas (Nombre,Apellido,Cedula,Dinero,Cuenta,Vendido,Fecha,Status,Movimiento,Situacion,Nota,Procesado) VALUES('$nombre','$apellido','$CI','$cantidad','$cuenta','$vendido','$fecha','$status','$movimiento', '/N/','$nota','/N/')";
					$resultado=mysqli_query($conexion, $consulta);
					$id=mysqli_insert_id($conexion);
					if ($resultado==false){
						echo "Error en la consulta";
					}else{
						echo "Se ha Registrado con exito!";
						echo $vendido;
						$consulta="UPDATE ventas set NumReferencia='$id' WHERE id=$id";
						$resultado=mysqli_query($conexion, $consulta);
					}
				}else{
					$fecha=date("d:m:y H:i");
					$consulta="INSERT INTO ventas (Nombre,Apellido,Cedula,Dinero,Cuenta,Vendido,Fecha,Status,Movimiento,Situacion,Nota,Procesado) VALUES('$nombre','$apellido','$CI','$cantidad','$cuenta','$vendido','$fecha','$status','$movimiento', '/N/','$nota','/N/')";
					$resultado=mysqli_query($conexion, $consulta);
					$id=mysqli_insert_id($conexion);
					if ($resultado==false){
						echo "Error en la consulta";
					}else{
						$consulta="UPDATE ventas set NumReferencia='$id' WHERE id=$id";
						$resultado=mysqli_query($conexion, $consulta);
						echo "Se ha Registrado con exito!";
						echo $vendido;
					}
				}
			}
		}else{

				$nombre=$_GET['nombre_cliente'];
				$apellido=$_GET['apellido_cliente'];
				$CI=$_GET['CI'];
				$cantidad=$_GET['cantidad_compra'];
				$cuenta=$_GET['num_cuenta'];
				$vendido=$_GET['quesevende'];
				$fecha=$_GET['fecha'];
				$status=$_GET['situacion_compra'];
				$movimiento="compra";
				$consulta="SELECT saldo FROM dinero ORDER by id DESC LIMIT 0,1";
				$resultado=mysqli_query($conexion, $consulta);
				$saldo=$resultado->fetch_assoc();
				$montofinal=$saldo['saldo']-$cantidad;
				$latas=$_GET['latas'];
				$nota=$_GET['nota'];
				echo "</div>";
			if (isset($_GET['CI'])and !empty($_GET['CI'])){
				if(isset($fecha) and !empty($fecha)){
					echo $vendido;
					$consulta="INSERT INTO ventas (Nombre,Apellido,Cedula,Dinero,Cuenta,Vendido,Fecha,Status,Movimiento,Saldo,Situacion,Latas,Nota,Procesado) VALUES('$nombre','$apellido','$CI','$cantidad','$cuenta','$vendido','$fecha','$status','$movimiento','$saldo', '/N/', '$latas','$nota','No')";
					$resultado=mysqli_query($conexion, $consulta);
					$id=mysqli_insert_id($conexion);

					if ($resultado==false){
						echo "Error en la consulta";
					}else{
						echo "Se ha Registrado con exito!";
						$consulta="INSERT INTO dinero (saldo) VALUES ('$montofinal') ";
						$resultado=mysqli_query($conexion, $consulta);
						$consulta="UPDATE ventas set NumReferencia='$id' WHERE id=$id";
						$resultado=mysqli_query($conexion, $consulta);
						
						
						if ($resultado==false){
							echo "no";
						}
						}
				}else{
					$fecha=date("d:m:y H:i");
					$consulta="INSERT INTO ventas (Nombre,Apellido,Cedula,Dinero,Cuenta,Vendido,Fecha,Status,Movimiento, Situacion,Latas,Nota,Procesado) VALUES('$nombre','$apellido','$CI','$cantidad','$cuenta','$vendido','$fecha','$status','$movimiento', '/N/','$latas','$nota','No')";
					$resultado=mysqli_query($conexion, $consulta);
					$id=mysqli_insert_id($conexion);
					if ($resultado==false){
						echo "Error en la consulta";
					}else{
						$consulta="UPDATE ventas set NumReferencia='$id' WHERE id=$id";
						$resultado=mysqli_query($conexion, $consulta);
						
						echo "Se ha Registrado con exito!";
						$consulta="INSERT INTO dinero (saldo) VALUES ('$montofinal') ";
						$resultado=mysqli_query($conexion, $consulta);
						if ($resultado==false){
							echo "no";
						}
						if ($vendido=="Cafe crudo"){
							$consulta="UPDATE ventas set Situacion='Sin Procesar' WHERE id=$id";
							$resultado=mysqli_query($conexion, $consulta);
							if ($resultado){
								echo "se pudo actualizar la situacion";
							}else{
								echo "no se putenv(setting)edo";
							}
						}

					}
				}
			}

		}
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