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
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $address = $salary = $p_apellido = $s_apellido = $email = $contraseña = "";
$name_err = $address_err = $salary_err = $p_apellido_err = $s_apellido_err = $email_err = $contraseña_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Por favor ingrese el nombre.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Por favor ingrese un nombre válido.";
    } else{
        $name = $input_name;
    }
        // Validate name
    $input_p_apellido = trim($_POST["p_apellido"]);
    if(empty($input_p_apellido)){
        $p_apellido_err = "Por favor ingrese el primer apellido.";
    } elseif(!filter_var($input_p_apellido, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $p_apellido_err = "Por favor ingrese un nombre válido.";
    } else{
        $p_apellido = $input_p_apellido;
    }
    
            // Validate name
    $input_s_apellido = trim($_POST["s_apellido"]);
    if(empty($input_s_apellido)){
        $s_apellido_err = "Por favor ingrese el segundo apellido.";
    } elseif(!filter_var($input_s_apellido, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $s_apellido_err = "Por favor ingrese un nombre válido.";
    } else{
        $s_apellido = $input_s_apellido;
    }
            // Validate name
    $input_contraseña = trim($_POST["contraseña"]);
    if(empty($input_contraseña)){
        $contraseña_err = "Por favor ingrese la contraseña.";
    } elseif(!filter_var($input_contraseña, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $contraseña_err = "Por favor ingrese un nombre válido.";
    } else{
        $contraseña = $input_contraseña;
    }
            // Validate name
    $input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = "Por favor ingrese el correo.";
    } elseif(!filter_var($input_email, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $email_err = "Por favor ingrese un nombre válido.";
    } else{
        $email = $input_email;

    }
    // Validate address
    $input_address = trim($_POST["address"]);
    if(empty($input_address)){
        $address_err = "Por favor ingrese una dirección.";     
    } else{
        $address = $input_address;
    }
    
    // Validate salary
    $input_salary = trim($_POST["salary"]);
    if(empty($input_salary)){
        $salary_err = "Por favor ingrese el telefono.";     
    } elseif(!ctype_digit($input_salary)){
        $salary_err = "Por favor ingrese un valor correcto y positivo.";
    } else{
        $salary = $input_salary;
    }    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($salary_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO repartidor (nombre_repart,  primer_apellido, segundo_apellido, email, contraseña, domicilio, telefono) VALUES (?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssss", $param_name, $param_p_apellido, $param_s_apellido, $param_email, $param_contraseña, $param_address, $param_salary);
            
            // Set parameters
            $param_name = $name;
            $param_address = $address;
            $param_salary = $salary;
            $param_p_apellido = $p_apellido;
            $param_s_apellido = $s_apellido;
            $param_email = $email;
            $param_contraseña = $contraseña;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Agregar Repartidor</h2>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Nombre</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($p_apellido_err)) ? 'has-error' : ''; ?>">
                            <label>Primer apellido</label>
                            <input type="text" name="p_apellido" class="form-control" value="<?php echo $p_apellido; ?>">
                            <span class="help-block"><?php echo $p_apellido_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($s_apellido_err)) ? 'has-error' : ''; ?>">
                            <label>Segundo apellido</label>
                            <input type="text" name="s_apellido" class="form-control" value="<?php echo $s_apellido; ?>">
                            <span class="help-block"><?php echo $s_apellido_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                            <label>Correo</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                            <span class="help-block"><?php echo $email_err;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($contraseña_err)) ? 'has-error' : ''; ?>">
                            <label>Contraseña</label>
                            <input type="password" name="contraseña" class="form-control" value="<?php echo $contraseña; ?>">
                            <span class="help-block"><?php echo $contraseña_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($salary_err)) ? 'has-error' : ''; ?>">
                            <label>Telefono</label>
                            <input type="text" name="salary" class="form-control" value="<?php echo $salary; ?>">
                            <span class="help-block"><?php echo $salary_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                            <label>Dirección</label>
                            <textarea name="address" class="form-control"><?php echo $address; ?></textarea>
                            <span class="help-block"><?php echo $address_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancelar</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
</body>
</html>