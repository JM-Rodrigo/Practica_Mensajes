<table class="table table-striped" id = "tb">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">Direccion</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">Telefono</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">Email</th>
                      
                </thead>
                <tbody>
                <?php
                    include("./Funciones/conexion.php"); //importar la conexion
                    $sentencia = "SELECT
                    proveedor.NombreProveedor, 
                    proveedor.DireccionProveedor, 
                    proveedor.TelefonoProveedor, 
                    proveedor.EmailProveedor
                    FROM
                    proveedor";
                    
                        $resultado = mysqli_query($conexion, $sentencia);
                    
                        while($mostrar = mysqli_fetch_assoc($resultado)){
                            echo"
                            <tr>
                                <td>".$mostrar["NombreProveedor"]."</td>
                                <td></td>
                                <td></td>
                                <td>".$mostrar["DireccionProveedor"]."</td>
                                <td></td>
                                <td></td>
                                <td>".$mostrar["TelefonoProveedor"]."</td>
                                <td></td>
                                <td></td>
                                <td>".$mostrar["EmailProveedor"]."</td>
                            </tr>";
                        } 
                        mysqli_close($conexion);                                       
                ?>      
                </tbody>        
            </table>