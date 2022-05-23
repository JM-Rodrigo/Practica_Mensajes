<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-striped" id = "tb">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">Apellido Paterno</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">Apellido Materno</th>
                            <th scope="col"></th>
                          <th scope="col"></th>
                        <th scope="col">Dirección/th>
                      
                    </thead>
                    <tbody>
                    <?php
                        include("./Funciones/conexion_jonathan.php"); //importar la conexion
                        $sentencia = "SELECT
                        cliente.Nombre_Cliente, 
                        cliente.Apellido1_Cliente, 
                        cliente.Apellido2_Cliente, 
                        cliente.Direccion_Cliente
                    FROM
                        cliente";

                            $resultado = mysqli_query($conexion, $sentencia);

                            while($mostrar = mysqli_fetch_assoc($resultado)){
                                echo"
                                <tr>
                                   <td>".$mostrar["Nombre_Cliente"]."</td>
                                    <td></td>
                                    <td></td>
                                    <td>".$mostrar["Apellido1_Cliente"]."</td>
                                    <td></td>
                                    <td></td>
                                    <td>".$mostrar["Apellido2_Cliente"]."</td>
                                    <td></td>
                                    <td></td>
                                    <td>".$mostrar["Direccion_Cliente"]."</td>
                                </tr>";
                            } 
                            mysqli_close($conexion);                                       
                    ?>      
                    </tbody>        
                </table>
            </div>
        </div>
    </div>
</div>