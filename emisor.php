<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css"> 
    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous">
    </script>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Chat ISIC</title>
</head>
<body>
    <header>
        <h1>Mensajes</h1>
    </header>
    
    <div id="form">
    
        <div class="fish" id="fish"></div>
        <div class="fish" id="fish2"></div>
        
        <form action="./Funciones_Emisor/create_mensaje_emisor.php && ../../create_mensaje_receptor.php" method="POST">
            
            <div class="formgroup" id="name-form">
                <label for="name">Número de contacto:</label>
                <select  class="form-select" aria-label="Default select example" name="txtNumeroContacto">
                    <option>--Seleccione--</option>
                        <?php
                            include("Funciones_Emisor/conexion_emisor.php");
                            $sentencia="SELECT * FROM contacto";
                            $resultado=mysqli_query($conexion,$sentencia);
                            while($contacto=mysqli_fetch_assoc($resultado)){
                                echo "
                                <option value='".$contacto['Numero_Contacto']."'>".$contacto["Nombre_Contacto"]."</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="formgroup" id="message-form">
                <label for="message">Escribe tu mensaje: </label>
                <textarea id="mensaje" name="txtMensaje"></textarea>
            </div>
            <div class="formgroup" id="message-form">
                <input type="submit" value="Enviar Mensaje" />
            </div>
            <div class="formgroup" id="message-form">
                <label >Mensajes recibidos: </label>
                <div id="tablaUpdate"></div>
            </div>
        </form>
    </div>
    <script src="JS/funciones.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(
                function(){
                    $('#tablaUpdate').load('tabla_emisor.php');
                },2000
            );
        });
    </script>
</body>
</html>