<?php
	
	include("../conex_bd.php");

	$vision=$_POST['vision'];
		
	$consulta="UPDATE nosotros SET vision = '$vision'";
	
	$query=mysqli_query($conexion, $consulta);
	

  	if (!isset($query)) {
  		echo "Error al enviar el texto en la bd" . mysql_error();
  		exit();
  	}else{
  		  ?>
			<script>
				alert("TEXTO EDITADO CORRECTAMENTE");
				window.location="../../vision.php";
			</script>
			<?php
  	}

?>	