<script>
	alert('Seguro quieres salir');
	</script>
<?php

//crear sesion
session_start();
//vaciar sesion
$_SESSION = array();
//Destruir sesion
session_destroy();
//Redireccionar a login.php
header("location:http://localhost/webmail2/index.php");
?>

