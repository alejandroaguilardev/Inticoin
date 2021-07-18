<?php
	
	include("../conex_bd.php");
 
	$telefono=$_POST['telefono'];
	$celular=$_POST['celular'];
	$correo=$_POST['correo'];
	$direccion=$_POST['direccion'];
   	$urldireccion=$_POST['urldireccion'];

		$consulta="UPDATE contacto SET telefono = '$telefono', celular = '$celular',correo = '$correo',direccion = '$direccion', urldireccion ='$urldireccion'";
	
	$query=mysqli_query($conexion, $consulta);
	

  	if (!isset($query)) {
  		echo "Error al enviar el texto en la bd" . mysql_error();
  		exit();
  	}else{
  		  ?>
			<script>
				alert("TEXTO EDITADO CORRECTAMENTE");
				window.location="../../contacto.php";
			</script>
			<?php
  	}

?>	