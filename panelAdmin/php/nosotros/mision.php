<?php
	
	include("../conex_bd.php");

	$mision=$_POST['mision'];
		
	$consulta="UPDATE nosotros SET mision = '$mision'";
	
	$query=mysqli_query($conexion, $consulta);
	

  	if (!isset($query)) {
  		echo "Error al enviar el texto en la bd" . mysql_error();
  		exit();
  	}else{
  		  ?>
			<script>
				alert("TEXTO EDITADO CORRECTAMENTE");
				window.location="../../mision.php";
			</script>
			<?php
  	}

?>	