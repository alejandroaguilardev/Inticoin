<?php
	
	include("../conex_bd.php");

	
	$id=$_GET['id'];
	$dni=$_POST['dni'];
	$password=$_POST['password'];
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];
	$empresa=$_POST['empresa'];
	$sexo=$_POST['sexo'];



	$consulta="UPDATE usuarios SET dni = '$dni', password = '$password', nombre = '$nombre', correo = '$correo', telefono = '$telefono', empresa = '$empresa', sexo = '$sexo', estado = '1'    WHERE id = '$id' ";
	
	$query=mysqli_query($conexion, $consulta);

  	if (!isset($query)) {
  		echo "Error al enviar el producto en la bd" . mysql_error();
  		exit();
  	}else{
  		  ?>
			<script>
				alert("USUARIO MODIFICADO CORRECTAMENTE");
				window.location="../../usuarios";
			</script>
			<?php
  	}

?>	
