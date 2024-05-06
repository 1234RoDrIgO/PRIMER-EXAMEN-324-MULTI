<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PREGUNTA 6</title>
    <link rel="stylesheet" href="estilos/estilosP6.css">
</head>
<body>
    <div class="tabla-container">   
        <h2>PREGUNTA : 6</h2>
        <h3>6. En la Aplicacion incluya el manejo de sesiones por roles.</h3>
            
        <?php 
            include "conexion.inc.php";                                   
        ?>
    </div>
    <?php
        $email = $_GET['email'];
        $sql1 = "SELECT * FROM persona WHERE email = '$email'";


        $resultado = mysqli_query($con, $sql1); 

        $fila = mysqli_fetch_array($resultado);

        $nombreCompleto = $fila['nombre'] . " " . $fila['paterno'] . " " . $fila['materno'];
        $tipoUsuario = $fila['tipoUsuario'];
        ?>


        <div class="tabla-container">
        <h3>USUARIO: <?php echo htmlspecialchars($tipoUsuario)?></h3>
        <h3>NOMBRE: <?php echo htmlspecialchars($nombreCompleto)?></h3>            
            
