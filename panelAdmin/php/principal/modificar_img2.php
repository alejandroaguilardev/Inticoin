<?php
	
	include("../conex_bd.php");

	
	$id=$_GET['id'];
	$slider2=$_FILES['slider2']['name'];
	$destino_1="../../../img/".utf8_decode($slider2);

	$consulta_a="SELECT * FROM inicio  WHERE  id='$id'";
	$query_a=mysqli_query($conexion, $consulta_a); 
	while ($a=mysqli_fetch_array($query_a,MYSQLI_ASSOC)) {
		$imagen_old=$a['slider2']; 
	}
	$destino_old="../../../img/".utf8_decode($imagen_old);
	$destino_1="../../../img/".utf8_decode($slider2);


	$consulta="UPDATE inicio SET slider2 = '$slider2' WHERE id = '$id' ";
	
	$query=mysqli_query($conexion, $consulta);
	unlink($destino_old); 
	copy($_FILES['slider2']['tmp_name'], $destino_1);

  	if (!isset($query)) {
  		echo "Error al enviar el producto en la bd" . mysql_error();
  		exit();
  	}else{
  		  ?>
			<script>
				alert("IMAGEN MODIFICADO CORRECTAMENTE");
				window.location="../../principal.php";
			</script>
			<?php
  	}

?>	 
