<?php
    include("conexion_servidor.php");
    $Emisor = "5524430586";
    $Receptor = $_POST['txtNumeroContacto'];
    $Mensaje = $_POST['txtMensaje'];
    date_default_timezone_set('America/Mexico_City');
    $Fecha_Hora = date('m-d-Y h:i:s a', time());
    $Estado = "Pendiente"; 
    $sentenciaMensaje="INSERT INTO chat_servidor VALUES(        
        DEFAULT,
        '$Emisor',
        '$Receptor',
        '$Mensaje',
        '$Fecha_Hora', 
        '$Estado'
        );";
    if(mysqli_query($conexion,$sentenciaMensaje)){   
        header("Location: ../emisor.php");           
       
    }
    else{
        echo "Error";
    }
    mysqli_close($conexion);
?>