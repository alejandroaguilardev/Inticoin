
<?php

 	$destino = "mineria@inticoin.io";
	$email = $_POST["email"];
	$asunto = "Subscripción";
	$contenido =  $email 
	mail($destino, $asunto, $contenido);
?>
<script>
	alert("Mensaje enviado");
	window.history.back();			
</script>