<?php
    include("conexion_receptor.php");
    $Emisor = "5524430586";
    $Receptor = $_POST['txtNumeroContacto'];
    $Mensaje = $_POST['txtMensaje'];
    date_default_timezone_set('America/Mexico_City');
    $Fecha_Hora = date('m-d-Y h:i:s a', time());
    $Estado = "Pendiente"; 
    $Tipo_Mensaje = "E";
    $sentenciaMensaje="INSERT INTO mensaje VALUES(        
        DEFAULT,
        '$Emisor',
        '$Mensaje',
        '$Fecha_Hora', 
        '$Estado', 
        '$Tipo_Mensaje'
        );";
    if(mysqli_query($conexion,$sentenciaMensaje)){      
        header("Location: ../index.php");          
    }
    else{
        echo "Error";
    }
    mysqli_close($conexion);
?>