<?php
	
	include("../conex_bd.php");
 
	$facebook=$_POST['facebook'];
	$instagram=$_POST['instagram'];
	$twitter=$_POST['twitter'];
	$pinterest=$_POST['pinterest'];
	$linkedin=$_POST['linkedin'];
	$whatsapp=$_POST['whatsapp'];
	$google=$_POST['google'];
	$youtube=$_POST['youtube'];

		$consulta="UPDATE redes SET facebook = '$facebook', instagram = '$instagram',twitter = '$twitter',pinterest = '$pinterest',linkedin = '$linkedin',whatsapp = '$whatsapp',google = '$google', youtube = '$youtube'";
	
	$query=mysqli_query($conexion, $consulta);
	

  	if (!isset($query)) {
  		echo "Error al enviar el texto en la bd" . mysql_error();
  		exit();
  	}else{
  		  ?>
			<script>
				alert("TEXTO EDITADO CORRECTAMENTE");
				window.location="../../redes.php";
			</script>
			<?php
  	}

?>	