<?php
	include("../conex_bd.php");
	$id=$_GET['id'];
					
	mysqli_query($conexion, "DELETE from noticias where id='$id'")
		or die("error al eliminar");

	mysqli_close($conexion);

?>
			<script>
				alert("ITEM ELIMINADO");
				window.location="../../noticias";</script>
		
			
