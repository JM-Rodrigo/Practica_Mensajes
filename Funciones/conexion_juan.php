<?php
	error_reporting(0);
	$servidor = "169.254.237.155";
	$usuario = "root";
	$password = "firemachineFTW.23";
	$db = "replicacion";

	$conexion = mysqli_connect($servidor, $usuario,$password, $db);

	if (mysqli_connect_errno()) {
		/*printf("Conexión fallida: %s\n", mysqli_connect_error());*/
	}
	if (mysqli_ping($conexion)) {
		printf ("¡La conexión está bien!\n");
	
	} else {
		/*printf ("Error: %s\n", mysqli_error($conexion));*/
		include("./Funciones/conexion_jorge.php");
	}

	
?>