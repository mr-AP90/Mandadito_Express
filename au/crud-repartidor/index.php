    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
        <style type="text/css">
            .wrapper{
                width: 650px;
                margin: 0 auto;
            }
            .page-header h2{
                margin-top: 0;
            }
        </style>
        <script type="text/javascript">
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();   
            });
        </script>
    </head>
    <body>
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header clearfix">
                            <h2 class="pull-left">Repartidor</h2>
                            <a href="create.php" class="btn btn-success pull-right">Agregar nuevo repartidor</a>
                        </div>
                            <?php
                            // Include config file
                            require_once "config.php";
                        
                        // Attempt select query execution
                        $sql = "SELECT * FROM repartidor";
                        if($result = mysqli_query($link, $sql)){
                            if(mysqli_num_rows($result) > 0){
                                echo "<table class='table table-bordered table-striped'>";
                                    echo "<thead>";
                                        echo "<tr>";
                                            echo "<th>numero</th>";
                                            echo "<th>Nombre</th>";
                                            echo "<th>Primer apellido</th>";
                                            echo "<th>Segundo apellido</th>";
                                            echo "<th>Correo</th>";
                                            echo "<th>Contraseña</th>";
                                            echo "<th>Telefono</th>";
                                            echo "<th>Domicilio</th>";
                                            echo "<th>Imagen</th>";
                                    
                                        echo "</tr>";
                                    echo "</thead>";
                                    echo "<tbody>";
                                    while($row = mysqli_fetch_array($result)){
                                        echo "<tr>";
                                            echo "<td>" . $row['id_repartidor'] . "</td>";
                                            echo "<td>" . $row['nombre_repart'] . "</td>";
                                            echo "<td>" . $row['primer_apellido'] . "</td>";
                                            echo "<td>" . $row['segundo_apellido'] . "</td>";
                                            echo "<td>" . $row['email'] . "</td>";
                                            echo "<td>" . $row['contraseña'] . "</td>";
                                            echo "<td>" . $row['telefono'] . "</td>";
                                            echo "<td>" . $row['domicilio'] . "</td>";
                                            echo "<td>";
                                                echo "<a href='read.php?id=". $row['id_repartidor'] ."' title='Ver' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                                echo "<a href='update.php?id=". $row['id_repartidor'] ."' title='Actualizar' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                                echo "<a href='delete.php?id=". $row['id_repartidor'] ."' title='Borrar' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                            echo "</td>";
                                        echo "</tr>";
                                    }
                                    echo "</tbody>";                            
                                echo "</table>";
                                // Free result set
                                mysqli_free_result($result);
                            } else{
                                echo "<p class='lead'><em>No records were found.</em></p>";
                            }
                        } else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                        }
     
                        // Close connection
                        mysqli_close($link);
                        ?>
                    </div>
                    <div class="page-header clearfix">
                            <a href="../repartidor.php" class="btn btn-success pull-right">regresar al inicio</a>
                        </div>
                </div>        
            </div>
        </div>
    </body>
    </html>