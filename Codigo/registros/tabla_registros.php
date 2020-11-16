<!DOCTYPE html>
<html>
<head>
	<title>Tablas</title>
	<link rel="stylesheet" type="text/css" href="/Codigo/css/mihojadeestilos.css">
    <link rel="stylesheet" type="text/css" href="/Codigo/css/inicio/historias/historias.css">
    <script src="/Codigo/script/jquery-3.4.1.min.js"></script>
    <script src="/Codigo/script/registros/tabla/all.js"></script>
    <style>
        #editar{
            background-color: transparent;
            position: absolute;
            left:10px;
            top:0px;
            display:none;
            transform: scale(0.9);
            transition:all .1s;
            margin-left: 0;
            z-index:5;
        }
        #tabla{
            position: absolute;
            background-color: transparent;
            left: 10px;
            top:0px;
            margin-left: 0;
            z-index: 4;
            width: auto;
            transform: scale(0.9);

        }
        #volver{
            border:0;
            background-color: orange;
            height: 20px;
            color:white;
        }
        #enviar{
            border:0;
            background-color: black;
            height: 20px;
            color:white;
        }
    </style>

</head>
<body>
    <div id='barras'>
    <?php
    //incluye lo necesario
        include($_SERVER['DOCUMENT_ROOT']."/Codigo/barras/navegacion.html");
		include($_SERVER['DOCUMENT_ROOT']."/Codigo/barras/barra_lateral_registros.html");

        include_once($_SERVER['DOCUMENT_ROOT']."/Codigo/sql/registros/mostrar_tabla_registros.php");
        include_once($_SERVER['DOCUMENT_ROOT']."/Codigo/sql/registros/tabla/actualizar_tabla_registros.php");
 
	 ?>
    </div>
	 <section align="center">
        <div id='tabla' align="center">
            <?php
            //llama a las clases
                $mostrar=new Mostrar_tabla_registros();
                $mostrar->get_registros();
            ?>
        <button id='enviar'>Editar</button>
        </div>
        <div id='editar' align="center">
            <?php
                $editar=new Mostrar_tabla_ediccion();
                $editar->get_registros();
                $editar->actualizar_registros();
                $editar->delete_fila();
            ?>
            <button id='volver'>Volver</button>
        </div>
        <img src="/Cafe.png">
	 </section>

</body>
</html>