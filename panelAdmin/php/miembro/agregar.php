<?php
	
	include("../conex_bd.php");

	
	$id="";
	$imagen1=$_FILES['imagen1']['name'];
	$nombre=$_POST['nombre'];
	$descripcion=$_POST['descripcion']; 
	$cargo=$_POST['cargo']; 

	
	$destino_1="../../../img/miembros/".$imagen1;


	$consulta="INSERT INTO miembros (id, nombre, cargo, imagen1) VALUES ('".$id."','".$nombre."','".$cargo."','".$imagen1."')";

	copy($_FILES['imagen1']['tmp_name'], $destino_1);

	$query=mysqli_query($conexion, $consulta);

  	if (!isset($query)) {
  		echo "Error al enviar el producto en la bd" . mysql_error();
  		exit();
  	}else{
  		 ?>
			<script>
				alert("Miembro Agregado...");
				window.location="../../miembros.php";
			</script>
			<?php
  	}

?>	
