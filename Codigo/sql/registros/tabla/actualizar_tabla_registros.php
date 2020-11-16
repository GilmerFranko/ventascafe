<style>
    #tdregistros{
        border:0;
        background:#f2f2f2;
        color:black;
    }
    #reg_form{
        border:0;
        border:solid 1px black;  
        width: auto;
    }
</style>
<?php
    ob_start();
    include_once($_SERVER['DOCUMENT_ROOT']."/Codigo/sql/ConexionBase.php");
        class Mostrar_tabla_ediccion extends Conexion{
            public $longitud;
            public $devuelvefila;
            public function construc(){
                parent::__construct;
            }
            public function get_registros(){
                $this->longitud=0;
                $a=0;
                $sql="SELECT * FROM ventas where 1";
                $resultado=$this->conexionBase->query($sql);
                if (!$resultado){
                
                    return false;
                }
                if(mysqli_num_rows($resultado)>0){

                        echo "<table style=background-color:orange;padding:2px;border-radius:0px;'>";
                       
                        echo"<td style=border:10;background:orange;color:black;width:100%;'><b>Nombre</b></td>";
                        echo"<td style=border:10;background:orange;color:black;width:100%;'><b>Apellido</b></td>";
                        echo"<td style=border:10;background:orange;color:black;width:100%;'><b>Cedula</b></td>";
                        echo"<td style=border:10;background:orange;color:black;width:100%;'><b>Dinero</b></td>";
                        echo"<td style=border:10;background:orange;color:black;width:100%;'><b>Cuenta</b></td>";
                        echo"<td style=border:10;background:orange;color:black;width:100%;'><b>Vendido</b></td>";
                        echo"<td style=border:10;background:orange;color:black;width:100%;'><b>Fecha</b></td>";
                        echo"<td style=border:10;background:orange;color:black;width:100%;'><b>Situacion</b></td></tr>";


                    echo "<form action '' method='post'>";

                    while ($fila=$resultado->fetch_row()){
                        //#006CA

                     
                        echo "<tr><td id='registros' style='border:0;background:#f2f2f2;color:black'><input id='reg_form' name ='nombre_provehiculo[$a]' type='text' placeholder='*' size='8px' value='$fila[1]' style='background-color:#f2f2f2;width :'></td>";
                        echo "<td id='registros' style='border:0;background:#f2f2f2;color:black'><input id='reg_form' name ='apellido_provehiculo[$a]' type='text' placeholder='*' size='8px' value='$fila[2]' style='background-color:#f2f2f2;width :auto'></td>";
                        echo "<td id='registros' style='border:0;background:#f2f2f2;color:black'><input id='reg_form' name ='CI[$a]' type='text' placeholder='*' size='6px' value='$fila[3]' style='background-color:#f2f2f2;'></td>";
                        echo "<td id='registros' style='border:0;background:#f2f2f2;color:black'><input id='reg_form' name ='tipo_provehiculo[$a]' type='text' placeholder='*' size='4px' value='$fila[4]' style='background-color:#f2f2f2;'></td>";
                        echo "<td id='registros' style='border:0;background:#f2f2f2;color:black'><input id='reg_form' name ='marca_provehiculo[$a]' type='text' placeholder='*' size='3px' value='$fila[5]' style='background-color:#f2f2f2;'></td>";
                        echo "<td id='registros' style='border:0;background:#f2f2f2;color:black'><input id='reg_form' name ='modelo_provehiculo[$a]' type='text' placeholder='*' size='5px' value='$fila[6]' style='background-color:#f2f2f2;'></td>";
                        echo "<td id='registros' style='border:0;background:#f2f2f2;color:black'><input id='reg_form' name ='serial_provehiculo[$a]' type='text' placeholder='*' size='5px' value='$fila[7]' style='background-color:#f2f2f2;'></td>";
                        echo "<td id='registros' style='border:0;background:#f2f2f2;color:black'><input id='reg_form' name ='placa_provehiculo[$a]' type='text' placeholder='*' size='5px' value='$fila[8]' style='background-color:#f2f2f2;'></td>";
                        echo "<td id='registros' style='border:0;background:#f2f2f2;color:black'><a href='/Codigo/registros/tabla_registros.php?deletearrow=$fila[0]' style='color:red;display:inline'>x</a></td></tr>";
                        $this->devuelvefila[$a] =$fila;
                        $this->longitud++;
					    $a++;
                    }
                    echo "<tr><td><td><button name='enviar' style='border:solid 1px white;background-color:orange;height:25px;width:px;color:white;'>Guardar</button></td></td></tr>";
                    echo "</form>";
                    echo "</table>";
                   
                }else{  
                echo "<tr><td style='color:white'>Sin resultados</td></tr>";
                    }
                echo "</table>";

            }
            public function actualizar_registros(){
                if (isset($_POST['enviar'])){
                    echo "<div style='display:none;'>";
                    $id=$_POST['id'];
                    $nombre=$_POST['nombre_provehiculo'];
                    $apellido=$_POST['apellido_provehiculo'];
                    $CI=$_POST['CI'];
                    $tipo=$_POST['tipo_provehiculo'];
                    $marca=$_POST['marca_provehiculo'];
                    $modelo=$_POST['modelo_provehiculo'];
                    $serial=$_POST['serial_provehiculo'];
                    $placa=$_POST['placa_provehiculo'];
                    $color=$_POST['color_provlehiculo'];
                    $edad=$_POST['edad_provehiculo'];
                    $ubicacion=$_POST['ubicacion_provehiculo'];
                    echo "</div>";
                }
                if(isset($_POST['enviar']) and !empty($_POST['nombre_provehiculo']) and !empty($_POST['CI'])  and !empty($_POST['tipo_provehiculo'])  and !empty($_POST['ubicacion_provehiculo'])){
                    $a=0;
                    $b=0;
                    
                    for($i=0;$i<$this->longitud+1;){
                   
                    /*echo $nombre[$a];
                    echo $apellido[$a];
                     echo $CI[$a];
                     echo $tipo[$a];
                     echo $marca[$a];
                    echo $modelo[$a];
                    echo $serial[$a];
                    echo $placa[$a];
                    echo $color[$a];
                    echo $edad[$a];
                    echo $_POST['edad_provehiculo'];*/
                    echo "<br>";

                        $sql="UPDATE ventas SET Nombres='$nombre[$a]' ,Apellidos='$apellido[$a]',Cedula='$CI[$a]',Vehiculo='$tipo[$a]',Marca='$marca[$a]',Modelo='$modelo[$a]',Seriall='$serial[$a]',Placa='$placa[$a]',Color='$color[$a]',Edad='$edad[$a]',Ubicacion='$ubicacion[$a]' WHERE id=$id[$i]";

                        
                        //$sql="UPDATE vehiculo_alcaldia SET Nombres='$nombre[$a]' ,Apellidos='$apellido[$a]',Cedula='$CI[$a]' ,Vehiculo='$tipo[$a]' ,Marca='$marca[$a]',Modelo='$modelo[$a]' ,Seriall='$serial[$a]' ,Placa='$placa[$a]' ,Color='$color[$a]',Edad='$edad[$a]' WHERE id=$i";
                        $update=$this->conexionBase->query($sql);
                        if ($update){
                           header("location: /Codigo/registros/tabla_registros.php");
                        }
                        else{
                            echo "<br>mal";

                        }
                        $i++;
                        $a++;
                    }
                }
            }
            public function delete_fila(){
                if (isset($_GET['deletearrow']) and !empty($_GET['deletearrow'])){
                    $borrar=$_GET['deletearrow'];
                    $sql="DELETE FROM ventas WHERE id=$borrar";
                    $delete=$this->conexionBase->query($sql);
                    header("location: /Codigo/registros/tabla_registros.php");
                    echo "hola";
                }
            }
        }

?>
<?php


?>
