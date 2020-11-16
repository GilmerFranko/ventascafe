<!DOCTYP Ehtml>
<html>
<head>
	<title>Bodega</title>
	<link rel="stylesheet" type="text/css" href="/Codigo/css/mihojadeestilos.css">
	<link rel="stylesheet" type="text/css" href="/Codigo/css/barras/estilos_barra_navegacion.css">
	<script src="/Codigo/script/jquery-3.4.1.min.js"></script>
	<script src="/Codigo/script/Interacciones.js"></script>
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
    <section>
            <table>
                <tr>
                    <td>
                        <p>Clientes</p>
                    </td>
                </tr>
                <tr>
                    <?php
                    $conexion=mysqli_connect('localhost','root','','datos_cafe');
                    $sql="SELECT * FROM clientes";
                    $resultado=mysqli_query($conexion, $sql);
                    $blancoazul=0;
                    if(mysqli_num_rows($resultado)>0){
                        echo "<table width='30%' align='center' style='background-color:orange;padding:2px;border-radius:0px;white-space:pre;border-collapse:collapse;'>";
                         echo"<tr><td style=border:10;background:orange;color:black;width:100%;'><b>ID</b></td>";
                         echo"<td style=border:10;background:orange;color:black;width:100%;'><b>Nombre</b></td>";
                         echo"<td style=border:10;background:orange;color:black;width:100%;'><b>Apellido</b></td>";
                         echo"<td style=border:10;background:orange;color:black;width:100%;'><b>Cedula</b></td>";
                         echo"<td style=border:10;background:orange;color:black;width:100%;'><b>Dinero</b></td>";
                         echo"<td style=border:10;background:orange;color:black;width:100%;'><b>Cuenta</b></td>";
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
                    ?>
                </tr>
                <tr>
                <td>
                <a href="/Codigo/configuraciones/agregar_clientes.php">Agregar</a>
                </td>
                <td>
                <a href="">Editar</a>
                </td>
                </tr>
            </table>
    </section>
</body>
</html>