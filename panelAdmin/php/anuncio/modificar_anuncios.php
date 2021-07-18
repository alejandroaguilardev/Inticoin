<?php
	
	include("../conex_bd.php");

	
	$id=$_GET['id'];
	$anuncio=$_POST['anuncio'];
	$descripcion=$_POST['descripcion'];
	$direccion=$_POST['direccion'];
	$fecha=$_POST['fecha'];
	$sueldo=$_POST['sueldo'];

	$imagen1=$_FILES['imagen1']['name'];


	if($imagen1!=null){
		$destino_1="../../../images/anuncios/".utf8_decode($imagen1);
		$consulta_a="SELECT * FROM anuncios  WHERE  id='$id'";
		$query_a=mysqli_query($conexion, $consulta_a); 
		while ($a=mysqli_fetch_array($query_a,MYSQLI_ASSOC)) {
			$imagen_old=$a['imagen1']; 
		}
		$destino_old="../../../images/anuncios/".utf8_decode($imagen_old);
		$destino_1="../../../images/anuncios/".utf8_decode($imagen1);


		$consulta="UPDATE anuncios SET imagen1 = '$imagen1' WHERE id = '$id' ";
		
		$query=mysqli_query($conexion, $consulta);
		unlink($destino_old); 
		copy($_FILES['imagen1']['tmp_name'], $destino_1);
	}

	

	$consulta="UPDATE anuncios SET anuncio = '$anuncio', descripcion = '$descripcion', direccion ='$direccion', fecha ='$fecha', sueldo ='$sueldo' WHERE id = '$id' ";
	
	$query=mysqli_query($conexion, $consulta);

  	if (!isset($query)) {
  		echo "Error al enviar el producto en la bd" . mysql_error();
  		exit();
  	}else{
  		  ?>
			<script>
				alert("TEXTO MODIFICADO CORRECTAMENTE");
				window.location="../../anuncios";
			</script>
			<?php
  	}

?>	
