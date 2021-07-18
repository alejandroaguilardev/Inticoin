<?php
	
	include("../conex_bd.php");
 
	$titulo1=$_POST['titulo1'];
	$titulo2=$_POST['titulo2'];
	$titulo3=$_POST['titulo3'];
	$parrafo1=$_POST['parrafo1'];
	$parrafo2=$_POST['parrafo2'];
	$parrafo3=$_POST['parrafo3'];
	$boton1=$_POST['boton1'];
	$boton2=$_POST['boton2'];
	$boton3=$_POST['boton3'];
		$consulta="UPDATE inicio SET titulo1 = '$titulo1', titulo2 = '$titulo2',titulo3 = '$titulo3',parrafo1 = '$parrafo1',parrafo2 = '$parrafo2', parrafo3 = '$parrafo3', boton1 = '$boton1' , boton2 = '$boton2' , boton3 = '$boton3'  ";
	
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