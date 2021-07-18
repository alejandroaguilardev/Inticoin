<?php
	include("../conex_bd.php");
	
	$id="";
	$imagen1=$_FILES['imagen1']['name'];
	
	$nombre=$_POST['nombre'];
	$descripcion=$_POST['descripcion']; 
	$general=$_POST['general']; 
	$fecha=$_POST['fecha']; 
	$destino_1="../../../images/noticias/".$imagen1;


	$consulta="INSERT INTO noticias (id, nombre, descripcion, general, fecha, imagen1) VALUES ('".$id."','".$nombre."','".$descripcion."','".$general."','".$fecha."','".$imagen1."')";

	copy($_FILES['imagen1']['tmp_name'], $destino_1);

	$query=mysqli_query($conexion, $consulta);

  	if (!isset($query)) {
  		echo "Error al enviar el producto en la bd" . mysql_error();
  		exit();
  	}else{
  		 ?>
			<script>
				alert(" Agregado...");
				window.location="../../noticias.php";
			</script>
			<?php
  	}

?>	
