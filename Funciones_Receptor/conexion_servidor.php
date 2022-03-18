<?php

	$servidor = "localhost";
	$usuario = "root";
	$password = "14040002";
	$db = "servidor_mensajeria";

	$conexion = mysqli_connect(
		$servidor,
		$usuario,
		$password,
		$db) OR DIE
		("No se puede conectar......".mysqli_connect_error());
?>
