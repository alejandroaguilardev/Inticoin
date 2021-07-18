<?php
	
	include("../conex_bd.php");

	
	$id="";
	$imagen1=$_FILES['imagen1']['name'];
	$anuncio=$_POST['anuncio'];
	$descripcion=$_POST['descripcion']; 
	$direccion=$_POST['direccion']; 
	$fecha=$_POST['fecha']; 
	$sueldo=$_POST['sueldo']; 
	$direccion=$_POST['direccion']; 

	
	$destino_1="../../../images/anuncios/".$imagen1;
	$destino_2="../../../images/anuncios/".$imagen2;


	$consulta="INSERT INTO anuncios (id, anuncio, sueldo, fecha, direccion, imagen1,descripcion) VALUES ('".$id."','".$anuncio."','".$sueldo."','".$fecha."','".$direccion."','".$imagen1."','".$descripcion."')";

	copy($_FILES['imagen1']['tmp_name'], $destino_1);

	$query=mysqli_query($conexion, $consulta);

  	if (!isset($query)) {
  		echo "Error al enviar el producto en la bd" . mysql_error();
  		exit();
  	}else{
  		 ?>
			<script>
				alert("anuncio Agregado...");
				window.location="../../anuncios.php";
			</script>
			<?php
  	}

?>	
