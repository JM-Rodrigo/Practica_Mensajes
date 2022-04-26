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
    <title>Practica Perras</title>
</head>
<body>
    <header>
        <h1>Servidor  chido</h1>
    </header>


    
    ref.push( value , /* onComplete */);



    <div id="form">
    
    <div class="fish" id="fish"></div>
    <div class="fish" id="fish2"></div>
    
    <form>
    
    <div class="formgroup" id="name-form">
        <div id="tablaUpdate"></div>
    </div>
    </form>
    </div>
    <script src="JS/funciones.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(
                function(){
                    $('#tablaUpdate').load('tabla_servidor.php');
                },2000
            );
        });
    </script>
</body>
</html>