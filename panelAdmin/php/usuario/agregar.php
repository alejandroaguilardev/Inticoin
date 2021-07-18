<?php
	
	include("../conex_bd.php");

	
	$id="";
	$dni=$_POST['dni'];
	$password=$_POST['password'];
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];
	$empresa=$_POST['empresa'];
	$sexo=$_POST['sexo'];
	$estado=1;

	$consulta_a="SELECT * FROM usuarios where dni ='$dni' ";
	$query_a=mysqli_query($conexion, $consulta_a); 
	while ($a=mysqli_fetch_array($query_a,MYSQLI_ASSOC)) {
		$verificar=$a['estado'];
	}


	if($verificar==1){?>
		<script>
			alert("Usuario Existente...");
			window.location="../../usuarios.php";
		</script>

	<?php }else{

		$consulta="INSERT INTO usuarios (id, dni, password, nombre, correo, telefono, empresa, sexo, estado) VALUES ('".$id."','".$dni."','".$password."','".$nombre."','".$correo."','".$telefono."','".$empresa."','".$sexo."','".$estado."')";

		$query=mysqli_query($conexion, $consulta);

	  	if (!isset($query)) {
	  		echo "Error al enviar el producto en la bd" . mysql_error();
	  		exit();
	  	}else{
	  		 ?>
				<script>
					alert("Usuario Agregado...");
					window.location="../../usuarios.php";
				</script>
				<?php
	  	}
	
	}

?>	
