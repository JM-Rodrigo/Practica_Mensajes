<table class="table table-striped" id = "tb">
                <thead>
                    <tr>
                        <th scope="col">De</th>
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
                    include("./Funciones/conexion_servidor.php"); //importar la conexion
                    $sentencia = "SELECT
                        chat_servidor.Emisor,
                        chat_servidor.Receptor, 
                        chat_servidor.Mensaje, 
                        chat_servidor.Fecha_Hora
                        FROM
                        chat_servidor
                        WHERE Receptor = '5524430586'";
                    
                        $resultado = mysqli_query($conexion_servidor, $sentencia);
                    
                        while($verChat = mysqli_fetch_assoc($resultado)){
                            echo"
                            <tr>
                                <td>".$verChat["Emisor"]."</td>
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
                        mysqli_close($conexion_servidor);                                       
                ?>      
                </tbody>        
            </table>