<?php
	
	include("../conex_bd.php");

	
	$id="";
	$dni=$_POST['dni'];
	$fecha=$_POST['fecha']; 
	$tipo=$_POST['tipo']; 
	$resultado=$dni.rand(5, 15).$_FILES['resultado']['name'];

	
	$destino_1="../../../resultados/".$resultado;


	$consulta="INSERT INTO resultados (id, dni, fecha, tipo, resultado) VALUES ('".$id."','".$dni."','".$fecha."','".$tipo."','".$resultado."')";

	copy($_FILES['resultado']['tmp_name'], $destino_1);

	$query=mysqli_query($conexion, $consulta);

  	if (!isset($query)) {
  		echo "Error al enviar el producto en la bd" . mysql_error();
  		exit();
  	}else{
  		 ?>
			<script>
				alert("Resultado Agregado...");
				window.location="../../resultados.php";
			</script>
			<?php
  	}

?>	
