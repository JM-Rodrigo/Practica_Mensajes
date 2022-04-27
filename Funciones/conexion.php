<?php
	$servidor = "169.254.166.141";
	$usuario = "root";
	$password = "osito123";
	$db = "replicacion";

	$conexion = mysqli_connect(
		$servidor,
		$usuario,
		$password,
		$db) OR DIE
		("No se puede conectar......".mysqli_connect_error());
?>