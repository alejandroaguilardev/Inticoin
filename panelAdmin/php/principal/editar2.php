<?php
	
	include("../conex_bd.php");
 
	$titulo1=$_POST['titulo1'];





	$consulta="UPDATE inicio SET titulo1 = '$titulo1'  ";
	
	$query=mysqli_query($conexion, $consulta);
  	if (!isset($query)) {
  		echo "Error al enviar el texto en la bd" . mysql_error();
  		exit();
  	}else{
  		  ?>
			<script>
				alert("TEXTO EDITADO CORRECTAMENTE");
				window.location="../../principal.php";
			</script>
			<?php
  	}

?>	