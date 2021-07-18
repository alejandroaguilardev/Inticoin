<?php
	include("../conex_bd.php");
	$id=$_GET['id'];
					


	$consulta="UPDATE usuarios SET estado = '0' WHERE id = '$id' ";
	
	$query=mysqli_query($conexion, $consulta);

	mysqli_close($conexion);

?>
			<script>
				alert("ITEM ELIMINADO");
				window.location="../../usuarios.php";</script>