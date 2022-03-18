<table class="table table-striped" id = "tb">
                <thead>
                    <tr>
                        <th scope="col">Emisor</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">Receptor</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">Mensaje</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">Fecha/Hora</th>
                </thead>
                <tbody>
                <?php
                    include("./Funciones/conexion.php"); //importar la conexion
                    $sentencia = "SELECT
                        chat_servidor.Emisor,
                        chat_servidor.Receptor, 
                        chat_servidor.Mensaje, 
                        chat_servidor.Fecha_Hora
                        FROM
                        chat_servidor";
                    
                        $resultado = mysqli_query($conexion, $sentencia);
                    
                        while($verChat = mysqli_fetch_assoc($resultado)){
                            echo"
                            <tr>
                                <td>".$verChat["Emisor"]."</td>
                                <td></td>
                                <td></td>
                                <td>".$verChat["Receptor"]."</td>
                                <td></td>
                                <td></td>
                                <td>".$verChat["Mensaje"]."</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>".$verChat["Fecha_Hora"]."</td>
                            </tr>";
                        } 
                        mysqli_close($conexion);                                       
                ?>      
                </tbody>        
            </table>