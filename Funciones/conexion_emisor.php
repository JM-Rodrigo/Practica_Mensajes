<?php
	$servidor = "";
	$usuario = "root";
	$password = "jonathan";
	$db = "bd_emisor";

	$conexion = mysqli_connect(
		$servidor,
		$usuario,
		$password,
		$db) OR DIE
		("No se puede conectar......".mysqli_connect_error());
?>