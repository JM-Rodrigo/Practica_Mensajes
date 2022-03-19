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
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">Tipo</th>
                </thead>
                <tbody>
                <?php
                    include("./Funciones_Emisor/conexion_servidor.php"); //importar la conexion
                    $sentencia = "SELECT
                    Receptor,
                    Fecha_Hora,
                    Mensaje
                    FROM
                    chat_servidor
                    WHERE Receptor = '5524430586'"
                        ;
                    
                        $resultado = mysqli_query($conexion, $sentencia);
                    
                        while($verChat = mysqli_fetch_assoc($resultado)){
                            echo"
                            <tr>
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