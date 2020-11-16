<?php 
	setcookie("SESSION", $_SESSION['usuario'], time()-1,"/");
	session_start();
	session_destroy();
	sleep(1);
	header ("location:/index.php");
 ?>