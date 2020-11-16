<!DOCTYPE html>
<html>
<head>
	<title>Bodega</title>
	<link rel="stylesheet" type="text/css" href="/Codigo/css/barras/estilos_barra_navegacion.css">
	<link rel="stylesheet" type="text/css" href="/Codigo/css/mihojadeestilos.css">
	<link rel="stylesheet" type="text/css" href="/Codigo/css/registros/registrar_datos.css">
	<script src="/Codigo/script/jquery-3.4.1.min.js"></script>
	<script src="/Codigo/script/Interacciones.js"></script>
	<meta name="viewport" content="width=device-width, maximum-scale=1, user-scalable=no"/>
	<style>
		.tablamovimientos{
			margin-left: 10%;
			margin-top:8%;

		}
	</style>
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
		require_once "../../Codigo/barras/barra_bodega.php";
		?>
		<div class="tablamovimientos">
		<?php
		$conexion=mysqli_connect('localhost','root','','datos_cafe');
				$blancoazul=0;
				$consulta="SELECT * FROM ventas WHERE Situacion='Sin procesar'";
				$resultado=mysqli_query($conexion, $consulta);
		if(mysqli_num_rows($resultado)>0){
                       echo "<table width='30%' align='center' style='background-color:orange;padding:2px;border-radius:0px;white-space:pre;border-collapse:collapse;'>";
                        echo"<tr><td style=border:10;background:orange;color:black;width:100%;'><b>ID</b></td>";
                        echo"<td style=border:10;background:orange;color:black;width:100%;'><b>Nombre</b></td>";
                        echo"<td style=border:10;background:orange;color:black;width:100%;'><b>Apellido</b></td>";
                        echo"<td style=border:10;background:orange;color:black;width:100%;'><b>Cedula</b></td>";
                        echo"<td style=border:10;background:orange;color:black;width:100%;'><b>Dinero</b></td>";
                        echo"<td style=border:10;background:orange;color:black;width:100%;'><b>Cuenta</b></td>";
                        echo"<td style=border:10;background:orange;color:black;'><b>Vendido</b></td>";
                        echo"<td style=border:10;background:orange;color:black;'><b>Fecha</b></td>";
                        echo"<td style=border:10;background:orange;color:black;'><b>Status</b></td>";
                        echo"<td style=border:10;background:orange;color:black;'><b>Situacion</b></td></tr>";
                        while ($fila=$resultado->fetch_row()){
                            $blancoazul++;
                            if($blancoazul%2){
                            echo "<tr><td style='border:0;background:#f2f2f2;color:black'>$fila[0]</td>";
                            echo "<td style='border:0;background:#f2f2f2;color:black;'>$fila[1]</td>";
                            echo "<td style='border:0;background:#f2f2f2;color:black'>$fila[2]</td>";
                            echo "<td style='border:0;background:#f2f2f2;color:black'>$fila[3]</td>";
                            echo "<td style='border:0;background:#f2f2f2;color:black'>$fila[4]</td>";
                            echo "<td style='border:0;background:#f2f2f2;color:black'>$fila[5]</td>";
                            echo "<td style='border:0;background:#f2f2f2;color:black'>$fila[6]</td>";
                            echo "<td style='border:0;background:#f2f2f2;color:black;font-size:13px;'>$fila[7]</td>";
                            echo "<td style='border:0;background:#f2f2f2;color:black'>$fila[8]</td>";
                            echo "<td style='border:0;background:#ABD6FF;color:black'>$fila[11]</td>";
                            echo "<td id='registros' style='border:0;background:#f2f2f2;color:black'><a href='/Codigo/bodega/apartadoenproduccion.php?procesado=$fila[0]' style='color:red;display:inline'>x</a></td></tr>";
                        }else{
                                echo "<tr><td style='border:0;background:#ABD6FF;color:black'>$fila[0]</td>";
                            echo "<td style='border:0;background:#ABD6FF;color:black;'>$fila[1]</td>";
                            echo "<td style='border:0;background:#ABD6FF;color:black'>$fila[2]</td>";
                            echo "<td style='border:0;background:#ABD6FF;color:black'>$fila[3]</td>";
                            echo "<td style='border:0;background:#ABD6FF;color:black'>$fila[4]</td>";
                            echo "<td style='border:0;background:#ABD6FF;color:black'>$fila[5]</td>";
                            echo "<td style='border:0;background:#ABD6FF;color:black'>$fila[6]</td>";
                            echo "<td style='border:0;background:#ABD6FF;color:black;font-size:13px;'>$fila[7]</td>";
                            echo "<td style='border:0;background:#ABD6FF;color:black'>$fila[8]</td>";
                            echo "<td style='border:0;background:#ABD6FF;color:black'>$fila[11]</td>";
                            echo "<td id='registros' style='border:0;background:#f2f2f2;color:black'><a href='/Codigo/bodega/apartadoenproduccion.php?procesado=$fila[0]' style='color:red;display:inline'>x</a></td></tr>";
                            }
                            /*echo "<td style='border:0;background:#f2f2f2;color:black'>$fila[9]</td>";
                            echo "<td style='border:0;background:#f2f2f2;color:black'>$fila[10]</td>";
                            echo "<td style='border:0;background:#f2f2f2;color:black'>$fila[11]</td></tr>";*/
                        }
                    }else{
                    echo "<tr><td style='color:white'>Sin resultados</td></tr>";

                    }
                    echo "</table>";
        //Marcar Como Procesado
        if (isset($_GET['procesado']) and !empty($_GET['procesado'])){
                    $larelacion=2.8;
                    $kglogrados=2.5;
                    $procesar=$_GET['procesado'];
                    $sql="SELECT * FROM ventas WHERE id=$procesar";
                    $resultado=mysqli_query($conexion, $sql);
                    $fila=$resultado->fetch_assoc();
                    $consulta="SELECT saldo FROM dinero ORDER by id DESC LIMIT 0,1";//Rescatar El Saldo Disponible para luego modificarlo
                    $resultado=mysqli_query($conexion, $consulta);
                    $saldo=$resultado->fetch_assoc();
                    $montofinal=$saldo['saldo']+$fila['Latas']*$kglogrados*$larelacion;
                    $sql="INSERT INTO ventas (Nombre,Apellido,Cedula,Dinero,Cuenta,Vendido,Fecha,Status,Movimiento,Situacion, Nota, Procesado) VALUES('$fila[Nombre]','$fila[Apellido]','$fila[Cedula]','$fila[Dinero]','$fila[Cuenta]','$fila[Vendido]','$fila[Fecha]','$fila[Status]','$fila[Movimiento]', 'Modificado','$fila[Nota]','Si')";
                     $resultado=mysqli_query($conexion, $sql);
                     if ($resultado){
                        $sql="INSERT INTO dinero (saldo,nota) VALUES ('$montofinal', 'Modificado')";
                         $resultado=mysqli_query($conexion, $sql);
                          $sql="UPDATE ventas SET Situacion='Modificado' WHERE id=$procesar";
                        $resultado=mysqli_query($conexion, $sql);
                     }else{
                        echo "mal";
                     }
                    
                }
                
		
	?>
	</div>
</body>
</html>