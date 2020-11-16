<!DOCTYPE HTML>
<html lang="ese">
<head>
	<meta charset="iso-8559-1"/>
	<meta name="description" content="pagina de enseñanza html5"/>
	<meta name="keywords" content="html5, css3, Javascript, diseño web"/>
	<meta charset="utf-8">
	<title>Ventas</title>
	<link rel="stylesheet" href="/Codigo/css/mihojadeestilos.css"/>
	<link rel="stylesheet" type="text/css" href="/Codigo/css/registros/registrar_datos.css">
	<script src="/Codigo/script/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#cantidad_compra").change(dinero);
			$("#agregarfila").click(agregarfila);
			$("#eliminarfila").click(eliminarfila);
			$("#enviar").click(enviar);
			$("#arrow").submit(ordenar_vendido);
			$("#formulario").submit(registrar);
			$("#vendido").click(mostrarvendido);
			$("#botoncomprar").click(tablacomprar);
			$("#botonvender").click(tablavender);

			var a=$("#cantidad_compra").val();
			var num=0;
		});
		function dinero(){
			var a=$("#cantidad_compra").val();
			var bo=true;
			var contar=0;
			for(var i=0;i<a.length;i++){
				if(a[i]=='.'){
					bo=false;
				}
			}
			if(bo==true){
				for(var i=0;i<a.length;i++){
					contar++;
					if (contar==3){
						a[2]='2';
						contar=0;
					}
				}
				$("#cantidad_compra").val(a+".00");
			}
		}
		var contador=0;
		function agregarfila(){
			contador++;
			var fila="<tr class='seleccionado' id='fila"+contador+"'><td>"+contador+"</td><td><input id='kilos"+contador+"' type='number' name='kilos1' class='Kilos' style='background-color: white;width: 40px' require=true><span> kilos </span></td><td><span> De </span><select id='select"+contador+"' style='height: 28px;border:none;background-color: white' name='productos'><option label='Bistec' value=Bistec></option><option label='Molida' value=Molida></option><option label='Desmechar' value=Desmechar></option></select><span id='' style='color:red'>x</span></td></tr>";
			$("#tabla_vendido").append(fila);
		}
		function eliminarfila(){
			$("#fila").remove();
		}
		function enviar(){
			var kg;
			kilos=$(".kilos");
			kg=$(".kilos");
			$("#ventanavendido").fadeToggle(500);
			$("#barras, #form_nueva_fila").css('filter', 'opacity(1)');
			$("#ventanavendido").css('filter', 'opacity(1)');

		}
		function ordenar_vendido(){
			var select=[];
			var kilos=[];
			for(var i=1;i<contador+1;i++){
				select[i]=$('#select'+i).val();
				kilos[i]=$('#kilos'+i).val();
			}
			var datos='';
			for(var i=1;i<contador+1;i++){
				datos=datos + kilos[i]+" Kg de "+select[i]+" / ";
			}
			$("#form_vendido").val(datos);
			return false;
		}
		function registrar(){

		}
		function mostrarvendido(){
			$("#ventanavendido").fadeToggle(500);
			$("#barras, #form_nueva_fila").css('filter', 'opacity(0.2)');
			$("#ventanavendido").css('filter', 'opacity(1)');
		}
		function tablacomprar(){

			$('#form_nueva_fila_vender').css('transform', 'scale(0.0)',);
			$('#form_nueva_fila_comprar').css('transform', 'scale(1)',);
		}
		function tablavender(){
			$('#form_nueva_fila_comprar').css('transform', 'scale(0)');
			$('#form_nueva_fila_vender').css('transform', 'scale(1)');
		}
	</script>


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
		require_once "../../Codigo/barras/barra_lateral_registros.html";
	?>
	</div>
	<section>
		<div><p>Movimiento</p>
					<table style="margin-top:10px;">
						<tr>
							<td><p class="opcionvendercomprar" id="botonvender">Vender</p></td>
							<td><p class="opcionvendercomprar" id="botoncomprar">Comprar</p></td>
						</tr>
					</table>
					<table>
						<tr>
							<td>
				<p>Saldo Disponible</p> <br>
				<input type="text" readonly="none" name="" value="<?php $conexion=mysqli_connect('localhost','root','','datos_cafe');
				$consulta="SELECT saldo FROM dinero ORDER by id DESC LIMIT 0,1";
				$resultado=mysqli_query($conexion, $consulta);
				$saldo=$resultado->fetch_assoc();
				echo $saldo['saldo']; ?>">
			</td>
						</tr>
					</table>
					</div>
	<div id="form_nueva_fila_comprar" align="center">
		<table id='tabla_comprar' align="center">
			<form action="/Codigo/sql/registros/registrar/insertar_datos_ventas.php" id="formulario">
			<tr>
				<td></td>
				<td>
					<div><p>Compra</p></div>
				</td>

			</tr>
			<tr>
			<td>
				<div>
					<p>Nombre</p><br>
					<input class="nombre_cliente" id='nombre_cliente' name ="nombre_cliente" type="text" placeholder="Gilmer">
					</input>
				</div>
			</td>
			<td>
				<div>
					<p>Apellido</p><br>
					<input name ="apellido_cliente" type="text" placeholder="Franko">
					</input>
				</div>
			</td>
			<td>
				<div>
					<p>C.I</p><br>
					<input name ="CI" type="number" placeholder="xx.xxx.xxx">
					</input>
				</div>
			</td>
			</tr>
			<tr>
			<td>
				<div>
					<p>Dinero</p><br>
					<input id='cantidad_compra' name ="cantidad_compra" type="number" placeholder="Dinero" step="0.01">
					</input>
				</div>
			</td>
			<td>

				<div>
					<p>#Cuenta</p><br>
					<input name ="num_cuenta" type="text" placeholder="Leon">
					</input>
				</div>
			</td>
			<td>
				<div>
					<p>Comprar><br>
					<select name="quesevende">
						<option label="Cafe trillado" value="Cafe trillado"></option>
						<option label="Cafe crudo(Lata)" value="Cafe crudo"></option>
						<option label="Cafe seco(Con Cascara)" value="Cafe seco"></option>
						<option label="Cafe molido" value="Cafe molido"></option>
					</select>
					<input type="hidden" name="compraventa" value="comprado">
				</div>
			</tr>
			<tr>
			</td>
			<td>
				<div>
					<p>Fecha</p> <span>(Opcional)</span><br>
					<input name ="fecha" type="date" placeholder="">
					</input>
				</div>
			</td>
			<td>
				<div>
					<p>Situacion</p><br>
					<select name="situacion_compra" id='select'>
						<option label="Debe" value=Debe></option>
						<option label="Pago Realizado" value=Efectuado></option>
					</select>
					</input>
				</div>
			</td>
			<td>
				<div>
				<p>Cantidad</p><br>
				<input type="text" name="latas" placeholder="Latas/Kg">
				</div>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<div>
					<p>Nota</p>
					<input type="text" name="nota">
				</div>
			</td>
		</tr>
		<tr>
			<td>
			</td>
			<td>

					<br>
					<br>
					<button>
						Registrar
					</button>
				</td>
				</tr>
			<?php
			require '../sql/registros/registrar/insertar_datos_ventas.php';
			?>
			</form>
		</table>
	</div>
	<div id="form_nueva_fila_vender" align="center">
		<table id='tabla_vender' align="center">
			<form action="/Codigo/sql/registros/registrar/insertar_datos_ventas.php" id="formulario">
			<tr>
				<td></td>
				<td><div><p>Venta</p></div>
				</td>

			</tr>
			<tr>
			<td>
				<div>
					<p>Nombre</p><br>
					<input class="nombre_cliente" id='nombre_cliente' name ="nombre_cliente" type="text" placeholder="Gilmer">
					</input>
				</div>
			</td>
			<td>
				<div>
					<p>Apellido</p><br>
					<input name ="apellido_cliente" type="text" placeholder="Franko">
					</input>
				</div>
			</td>
			<td>
				<div>
					<p>C.I</p><br>
					<input name ="CI" type="number" placeholder="xx.xxx.xxx">
					</input>
				</div>
			</td>
			</tr>
			<tr>
			<td>
				<div>
					<p>Dinero</p><br>
					<input id='cantidad_compra' name ="cantidad_compra" type="number" placeholder="Dinero" step="0.01">
					</input>
				</div>
			</td>
			<td>

				<div>
					<p>#Cuenta</p><br>
					<input name ="num_cuenta" type="text" placeholder="Leon">
					</input>
				</div>
			</td>
			<td>
				<div>
					<p>Vendido><br>
					<select name="quesevende">
						<option label="Cafe trillado" value="Cafe trillado"></option>
						<option label="Cafe crudo(Lata)" value="Cafe crudo"></option>
						<option label="Cafe seco(Con Cascara)" value="Cafe seco"></option>
						<option label="Cafe molido" value="Cafe molido"></option>
					</select>
					<input type="hidden" name="compraventa" value="vendido">
				</div>
			</tr>
			<tr>
			</td>
			<td>
				<div>
					<p>Fecha</p> <span>(Opcional)</span><br>
					<input name ="fecha" type="date" placeholder="">
					</input>
				</div>
			</td>
			<td>
				<div>
					<p>Situacion</p><br>
					<select name="situacion_compra" id='select'>
						<option label="Debe" value=Debe></option>
						<option label="Pago Realizado" value=Efectuado></option>
					</select>
					</input>
				</div>
			</td>
			</tr>
			<tr>
			<td colspan="2">
				<div style="text-align:center;color:white">
					<p>Nota</p>
					<br>
					<input type="text" name="nota" style="width:90%;background-color: black;color:white;" placeholder="Nota">
				</div>
			</td>
		</tr>
			<tr>
			<td>
			</td>
			<td>

					<br>
					<br>
					<button>
						Registrar
					</button>
				</td>
				</tr>
			<?php
			require '../sql/registros/registrar/insertar_datos_ventas.php';
			?>
			</form>
		</table>
	</div>
</section>
</body>
</html>
<?php
/*<tr id='fila'>
					<br>
					<td>
						<input type="number" name="kilos" class='kilos' style='background-color: white;width: 100px'>
						<span>kilos</span>
					</td>
					<td>
						<span>De</span>
						<select style="height: 28px;border:none;background-color: white" name='productos' id='productos'>
							<option label="Bistec" value=Bistec></option>
							<option label="Molida" value=Molida></option>
							<option label="Desmechar" value=Desmechar></option>
						</select>
					</td>
				</tr>*/
 ?>