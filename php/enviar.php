
<?php

 	$destino = "mineria@inticoin.io";
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$asunto = $_POST["asunto"];
	$mensaje = $_POST["mensaje"];
	$contenido = "Nombre: " . $nombre ."\nCorreo: " . $email . "\mensaje: " . $mensaje;
	mail($destino, $asunto, $contenido);
?>
<script>
	alert("Mensaje enviado");
	window.history.back();			
</script>