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
                    include("./Funciones_Emisor/conexion_emisor.php"); //importar la conexion
                    $sentencia = "SELECT
                        Numero,
                        Fecha_Hora,
                        Texto,
                        Tipo_Mensaje 
                        FROM
                        Mensaje
                        WHERE Receptor = '5524430586'";
                    
                        $resultado = mysqli_query($conexion_servidor, $sentencia);
                    
                        while($verChat = mysqli_fetch_assoc($resultado)){
                            echo"
                            <tr>
                                <td>".$verChat["Numero"]."</td>
                                <td></td>
                                <td></td>
                                <td>".$verChat["Texto"]."</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>".$verChat["Fecha_Hora"]."</td>
                                <td></td>
                                <td></td>
                                <td>".$verChat["Tipo_Mensaje"]."</td>
                            </tr>";
                        } 
                        mysqli_close($conexion_servidor);                                       
                ?>      
                </tbody>        
            </table>