<?php
	
	include("../conex_bd.php");
	$id=$_GET['id'];
	$quienes=$_POST['quienes'];

	$consulta="UPDATE nosotros SET  quienes ='$quienes' where id='$id'";
	$query=mysqli_query($conexion, $consulta);


  	if (!isset($query)) {
  		echo "Error al enviar el producto en la bd" . mysql_error();
  		exit();
  	}else{
  		 ?>
			<script>
				alert("¿Quienes Somos? Actualizado...");
				window.location="../../quienes.php";
			</script>
			<?php
  	}

?>	
