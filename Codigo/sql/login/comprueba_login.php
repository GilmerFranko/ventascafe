	<?php 
		require ("Codigo/sql/ConexionBase.php");
		class CompruebaLogin extends Conexion{
			public $hola;
			public function CompruebaLogin(){
				parent::__construct();

			}
			public function CompruebaLoogin(){
				$autenticado=false;
				$conexion=mysqli_connect("localhost", "root", "");
				mysqli_select_db($conexion, "usuarios");
				echo "<div style='display: none;'>";
				$usuario=$_POST['usuario'];
				$clave=$_POST['clave'];
				echo "</div>";
				$sql = ("SELECT * FROM login  WHERE Usuario='$usuario'") ;

				$verifica=$this->conexionBase->query($sql);
				if(mysqli_num_rows($verifica)>0){//si existe al menos una fila
					while($fila=$verifica->fetch_row()){//mientras exista recorra la fila
						if($clave==$fila[2]){
							$id=$fila[0];
							session_start();
							$_SESSION['usuario']=$_POST['usuario'];
							$_SESSION['clave']=$_POST['clave'];
							$_SESSION['id']="hola";
							$autenticado=true;
							if (isset($_POST['recordar'])){
								setcookie("SESSION", $_POST["usuario"], time()+ (60*60*24*5));//Cookie para recordar al usuario
							}
							header ("location: /Codigo/inicio/inicio.php");
							die;

						}
					}
				}else{
					if (isset($usuario)){
						$this->hola="Usuario o Clave incorrectas";
					}
				}
				if($autenticado==false){
					if (isset($_COOKIE["SESSION"])){
						session_start();
						$_SESSION['usuario']=$_COOKIE["SESSION"];
						header ("location: /Codigo/inicio/inicio.php");
						die;
					}
				}
				mysqli_close($this->conexionBase);
			}

			public function hola(){
				echo "<p id='fontsmall' style='color:red'>$this->hola</p>";
			}
		}
/*
				$usuario=$_POST['usuario'];
				$password=$_POST['password'];
				echo $usuario;
				$conexion=mysqli_connect("localhost", "root", "");
				if (mysqli_connect_errno()){
					echo "fallo al conectar con la base de datos";
				}
				mysqli_select_db($conexion, "usuarios");
				mysqli_set_charset($conexion, "utf8");
					$sql=("SELECT * FROM login where Usuario = '?' ");
					$resultado=mysqli_prepare($conexion, $sql);
					$ok=mysqli_stmt_bind_param($resultado, "s", $usuario);
					$ok=mysqli_stmt_execute($resultado);
					$num=mysqli_stmt_num_rows($resultado);
					echo $num;
*/

				

?>
