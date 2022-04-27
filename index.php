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
        <h1>Conexion</h1>
    </header>
    
    <div id="form">
    
        <div class="fish" id="fish"></div>
        <div class="fish" id="fish2"></div>
            <div class="formgroup" id="message-form">
                <label > </label>
                <div id="tablaUpdate"></div>
            </div>
    </div>
    <script src="JS/funciones.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(
                function(){
                    $('#tablaUpdate').load('tabla.php');
                },2000
            );
        });
    </script>
</body>
</html>