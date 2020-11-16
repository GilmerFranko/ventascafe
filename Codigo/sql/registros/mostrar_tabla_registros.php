<?php
    include_once($_SERVER['DOCUMENT_ROOT']."/Codigo/sql/ConexionBase.php");
        class Mostrar_tabla_registros extends Conexion{
            public function construc(){
                parent::__construct;
            }
                public function get_registros(){
                    $blancoazul=0;
                    $sql="SELECT * FROM ventas where 1";
                    $resultado=$this->conexionBase->query($sql);
                    if (!$resultado){
                        /*echo "<table style='background:black;padding:5px;width:100%'>
                              <tr>
                              <td style=border:0;background:black;color:white>Sin Resultado Menor</td>
                              </tr></table>";*/
                        return false;
                    }
                    if(mysqli_num_rows($resultado)>0){
                       echo "<table align='center' style='background-color:orange;padding:2px;border-radius:0px;white-space:pre;border-collapse:collapse;'>";
                        echo"<tr><td style=border:10;background:orange;color:black;width:100%;'><b>ID</b></td>";
                        echo"<td style=border:10;background:orange;color:black;width:100%;'><b>Nombre</b></td>";
                        echo"<td style=border:10;background:orange;color:black;width:100%;'><b>Apellido</b></td>";
                        echo"<td style=border:10;background:orange;color:black;width:100%;'><b>Cedula</b></td>";
                        echo"<td style=border:10;background:orange;color:black;width:100%;'><b>Dinero</b></td>";
                        echo"<td style=border:10;background:orange;color:black;width:100%;'><b>Cuenta</b></td>";
                        echo"<td style=border:10;background:orange;color:black;'><b>Vendido</b></td>";
                        echo"<td style=border:10;background:orange;color:black;'><b>Fecha</b></td>";
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
                            echo "<td style='border:0;background:#f2f2f2;color:black'>$fila[8]</td></tr>";}else{
                                echo "<tr><td style='border:0;background:#ABD6FF;color:black'>$fila[0]</td>";
                            echo "<td style='border:0;background:#ABD6FF;color:black;'>$fila[1]</td>";
                            echo "<td style='border:0;background:#ABD6FF;color:black'>$fila[2]</td>";
                            echo "<td style='border:0;background:#ABD6FF;color:black'>$fila[3]</td>";
                            echo "<td style='border:0;background:#ABD6FF;color:black'>$fila[4]</td>";
                            echo "<td style='border:0;background:#ABD6FF;color:black'>$fila[5]</td>";
                            echo "<td style='border:0;background:#ABD6FF;color:black'>$fila[6]</td>";
                            echo "<td style='border:0;background:#ABD6FF;color:black;font-size:13px;'>$fila[7]</td>";
                            echo "<td style='border:0;background:#ABD6FF;color:black'>$fila[8]</td></tr>";
                            }
                            /*echo "<td style='border:0;background:#f2f2f2;color:black'>$fila[9]</td>";
                            echo "<td style='border:0;background:#f2f2f2;color:black'>$fila[10]</td>";
                            echo "<td style='border:0;background:#f2f2f2;color:black'>$fila[11]</td></tr>";*/
                            
                            
                        }
                 
                    }else{
                    echo "<tr><td style='color:white'>Sin resultados</td></tr>";

                    }
                    echo "</table>";
                }
}
?>
