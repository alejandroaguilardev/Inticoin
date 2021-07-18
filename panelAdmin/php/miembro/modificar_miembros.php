<?php
	
	include("../conex_bd.php");

	
	$id=$_GET['id'];
	$nombre=$_POST['nombre'];
	$cargo=$_POST['cargo'];

	$imagen1=$_FILES['imagen1']['name'];


	if($imagen1!=null){
		$destino_1="../../../img/miembros/".utf8_decode($imagen1);
		$consulta_a="SELECT * FROM miembros  WHERE  id='$id'";
		$query_a=mysqli_query($conexion, $consulta_a); 
		while ($a=mysqli_fetch_array($query_a,MYSQLI_ASSOC)) {
			$imagen_old=$a['imagen1']; 
		}
		$destino_old="../../../img/miembros/".utf8_decode($imagen_old);
		$destino_1="../../../img/miembros/".utf8_decode($imagen1);


		$consulta="UPDATE miembros SET imagen1 = '$imagen1' WHERE id = '$id' ";
		
		$query=mysqli_query($conexion, $consulta);
		unlink($destino_old); 
		copy($_FILES['imagen1']['tmp_name'], $destino_1);
	}


	$consulta="UPDATE miembros SET nombre = '$nombre', cargo = '$cargo' WHERE id = '$id' ";
	
	$query=mysqli_query($conexion, $consulta);

  	if (!isset($query)) {
  		echo "Error al enviar el producto en la bd" . mysql_error();
  		exit();
  	}else{
  		  ?>
			<script>
				alert("TEXTO MODIFICADO CORRECTAMENTE");
				window.location="../../miembros";
			</script>
			<?php
  	}

?>	
