<?php
	include($_SERVER['DOCUMENT_ROOT']."/Codigo/sql/ConexionBase.php");

	class EnviaDatos extends Conexion{
		public $area_publicar;
		public function EnviaDatos(){
			parent::__construct();
			$fecha=date("d:m:y H:i");
			$this->area_publicar=$_POST['area_publicar'];
			try {
					$conexion=mysqli_connect("localhost", "root", "");
					mysqli_select_db($conexion, "publicaciones");
					$sql = ("INSERT INTO publicaciones (fecha, dato, likes ,ultimoid) VALUES ('$fecha','$this->area_publicar','0','0')");
					$verifica=$this->conexionBase->query($sql);
					$id=mysqli_insert_id($this->conexionBase);
					$sql= "UPDATE publicaciones SET ultimoid=$id WHERE id=1";
					$verifica=$this->conexionBase->query($sql);


			} catch (Exception $e) {
				echo "hla";
			}
			mysqli_close($this->conexionBase);
		}
	}
 ?>
 <?php
	/*require "Codigo/sql/ConexionBase.php";

	class EnviaDatos extends Conexion{
		public function EnviaDatos(){
			parent::__construct();
			try {
				$conexion=mysqli_connect("localhost", "root", "");
				mysqli_select_db($conexion, "usuarios");
				$fecha=date("d/m/y H:i");
				$dato=$_Po
				$sql = ("INSERT INTO 'publicaciones'('" . $fecha . "', '". $ ."', 'likes') VALUES (,[value-2],[value-3],[value-4])") ;

			} catch (Exception $e) {
			}
		}
	}*/
 ?>