<?php
    $conexion_emisor = include("conexion_emisor.php");
    $conexion_receptor= include("conexion_receptor.php");
    $conexion_servidor= include("conexion_servidor.php");

    $Emisor = "5524430586";
    $Receptor = $_POST['txtNumeroContacto'];
    $Mensaje = $_POST['txtMensaje'];
    date_default_timezone_set('America/Mexico_City');
    $Fecha_Hora = date('m-d-Y h:i:s a', time());
    $Tipo_Mensaje = "S";
    $Estado = "P"; 

    $sentenciaEmisor="INSERT INTO mensaje VALUES(        
        DEFAULT,
        '$Emisor',
        '$Mensaje',
        '$Fecha_Hora', 
        '$Estado', 
        '$Tipo_Mensaje'
        );";

    $sentenciaReceptor="INSERT INTO mensaje VALUES(        
        DEFAULT,
        '$Emisor',
        '$Mensaje',
        '$Fecha_Hora', 
        '$Estado', 
        '$Tipo_Mensaje'
        );";
    
    $sentenciaServidor="INSERT INTO chat_servidor VALUES(        
        DEFAULT,
        '$Emisor',
        '$Receptor',
        '$Mensaje',
        '$Fecha_Hora', 
        '$Estado'
        );";

    $resultado_emisor = mysqli_query($conexion_emisor,$sentenciaEmisor);
    $resultado_receptor = mysqli_query($conexion_receptor,$sentenciaReceptor);
    $resultado_servidor = mysqli_query($conexion_servidor,$sentenciaServidor);
    if($resultado_emisor && $resultado_receptor && $resultado_servidor){
        header("Location: ../emisor.php");          
    }
    else{
        echo "Error";
    }
    mysqli_close($conexion_emisor);
?>