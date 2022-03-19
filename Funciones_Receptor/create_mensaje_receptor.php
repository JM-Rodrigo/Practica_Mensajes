<?php
    include('conexion_receptor.php');
    $Emisor = "5568878355";
    $Receptor = $_POST['txtNumeroContacto'];
    $Mensaje = $_POST['txtMensaje'];
    date_default_timezone_set('America/Mexico_City');
    $Fecha_Hora = date('m-d-Y h:i:s a', time());
    $Estado = "Pendiente"; 
    $Tipo_Mensaje = "S";
    $sentenciaMensaje="INSERT INTO mensaje VALUES(        
        DEFAULT,
        '$Emisor',
        '$Fecha_Hora',
        '$Mensaje',
        '$Tipo_Mensaje',
        '$Estado'
        );";
    if(mysqli_query($conexion,$sentenciaMensaje)){      
        header("Location: ../receptor.php");          
    }
    else{
        echo "Error";
    }
    mysqli_close($conexion);
?>
