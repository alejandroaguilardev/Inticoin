<?php
	$conexion=mysqli_connect("localhost","rostrodi_alex","Diciembre123")or die("Error al conectar con la base de datos.");
	$sdb=mysqli_select_db($conexion,"rostrodi_inticoin")or die("la base de datos no existe");
 	$conexion->set_charset("utf8")
?>