<?php
session_start();
include("../conex_bd.php");

$user=$_POST['usuario'];
$pass=$_POST['contraseña'];

$filtro_user= str_replace("or","", $user);
$filtro_pass= str_replace("or","", $pass);

$usu_docente=substr($filtro_user, 0, 2);


	$usuario=$filtro_user;
	$password=$filtro_pass;

	$peticion="SELECT * FROM administradores WHERE usuario='".$usuario."' AND contrasena='".$password."'";
	$resultado=mysqli_query($conexion,$peticion);
	if($resultado){
		$cant=mysqli_num_rows($resultado);
		if($cant>0){
			$_SESSION['usuario']=$usuario;
			header("Location: ../../inicio");
		}else{
			 ?>
			<script>
				alert("CONTRASEÑA INCORRECTA, INTENTE DE NUEVO.");
				window.location="../../index";
			</script>
			<?php
		}
		mysqli_close($conexion);
	}else{
		echo "error en la consulta";
	}



 ?>