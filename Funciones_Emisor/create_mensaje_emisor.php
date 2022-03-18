<?php
    include("conexion_emisor.php");
    $Emisor = "5524430586";
    $Receptor = $_POST['txtNumeroContacto'];
    $Mensaje = $_POST['txtMensaje'];
    date_default_timezone_set('America/Mexico_City');
    $Fecha_Hora = date('m-d-Y h:i:s a', time());
    $Tipo_Mensaje = "S";
    $Estado = "P"; 
    $sentenciaMensaje="INSERT INTO mensaje VALUES(        
        DEFAULT,
        '$Receptor',
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