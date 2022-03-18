<?php
	$servidor = "192.168.137.226";
	$usuario = "root";
	$password = "Osito123";
	$db = "bd_receptor";

	$conexion = mysqli_connect(
		$servidor,
		$usuario,
		$password,
		$db) OR DIE
		("No se puede conectar......".mysqli_connect_error());
?>