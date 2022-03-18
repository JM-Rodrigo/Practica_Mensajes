<?php
    include("conexion_emisor.php");
    include("conexion_receptor.php");
    include("conexion_servidor.php");

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
    if(mysqli_query($conexion_emisor,$sentenciaEmisor)){ 
        header("Location: ../emisor.php");
    }
    if(mysqli_query($conexion_receptor,$sentenciaReceptor)){  
        header("Location: ../emisor.php");
        
    }if(mysqli_query($conexion_servidor,$sentenciaServidor)){
        header("Location: ../emisor.php");
    }
    else{
        echo "Error";
    }
    mysqli_close($conexion);
?>