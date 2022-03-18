<?php
	$servidor = "192.168.137.156";
	$usuario = "root";
	$password = "jonathan";
	$db = "cliente";

	$conexion = mysqli_connect(
		$servidor,
		$usuario,
		$password,
		$db) OR DIE
		("No se puede conectar......".mysqli_connect_error());
?>