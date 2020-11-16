<!DOCTYPE html>
<html>
<head>
	<title>Historias</title>
	<link rel="stylesheet" type="text/css" href="/Codigo/css/mihojadeestilos.css">
	<link rel="stylesheet" type="text/css" href="/Codigo/css/inicio/historias/historias.css">
</head>
<body>
	<?php
		require ("../../barras/navegacion.html");
		require ("../../barras/barra_lateral_inicio.html");
		require_once("../../sql/inicio/historias/publicar/recibe_parametros_del_formulario_publicar.php");
		require_once("../../sql/inicio/historias/mostrar_publicaciones/mostrar_publicaciones.php");

		session_start();
		//$id=$_SESSION['id'];//Rescata el id del usario en la seccion activa almacenandolo en $id
		if (isset($_POST['area_publicar'])){
			$publicar=new EnviaDatos();
			header("location: historias.php");
			die;
		}
		$view_publicaciones=new mostrar_publicaciones();

	 ?>
	 <section>
	 <form action="<?php echo $_SERVER['PHP_SELF'];?>"  method="post">
	 	<input type="hidden" name="id" value="<?php echo $id;?>">
	 	<textarea name=area_publicar></textarea><br>
	 	<button style="height: 25px; background-color: orange; border:none;">Publicar</button>

	 </form>
	 

		<div>
		</div>
		<div>
			<?php
				echo "<div id='fecha'>Publicado El: ".$view_publicaciones->get_construct(0,1)."</div><br>";
				echo "<div id='comentarios'><br>".$view_publicaciones->get_construct(0,2). "</div> <br>";
				echo "<div id='likes'>Likes: ".$view_publicaciones->get_construct(0,3). "</div><br>";
			 ?>
		</div>
		<div>
			<?php
				echo "ID: ".$view_publicaciones->get_construct(1,0). "<br>";
				echo "<div id='fecha'>Publicado El: ".$view_publicaciones->get_construct(1,1)."</div><br>";
				echo "<div id='comentarios'><br>".$view_publicaciones->get_construct(1,2). "</div> <br>";
				echo "<div id='likes'>Likes: ".$view_publicaciones->get_construct(1,3). "</div><br>";
			 ?>
		</div>
		<div>
			<?php
				echo "ID: ".$view_publicaciones->get_construct(2,0). "<br>";
				echo "<div id='fecha'>Publicado El: ".$view_publicaciones->get_construct(2,1)."</div><br>";
				echo "<div id='comentarios'><br>".$view_publicaciones->get_construct(2,2). "</div> <br>";
				echo "<div id='likes'>Likes: ".$view_publicaciones->get_construct(2,3). "</div><br>";
			 ?>
		</div>
		<div>
			<?php
				echo "ID: ".$view_publicaciones->get_construct(3,0). "<br>";
				echo "<div id='fecha'>Publicado El: ".$view_publicaciones->get_construct(3,1)."</div><br>";
				echo "<div id='comentarios'><br>".$view_publicaciones->get_construct(3,2). "</div> <br>";
				echo "<div id='likes'>Likes: ".$view_publicaciones->get_construct(3,3). "</div><br>";
			 ?>
		</div>
		<div>
			<?php
				echo "ID: ".$view_publicaciones->get_construct(4,0). "<br>";
				echo "<div id='fecha'>Publicado El: ".$view_publicaciones->get_construct(4,1)."</div><br>";
				echo "<div id='comentarios'><br>".$view_publicaciones->get_construct(4,2). "</div> <br>";
				echo "<div id='likes'>Likes: ".$view_publicaciones->get_construct(4,3). "</div><br>";
			 ?>
		</div>
		<div></div>
		<div></div>
		<div></div>
		<div></div>

	 </section>

</body>
</html>