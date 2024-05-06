<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PREGUNTA 7</title>
    <link rel="stylesheet" href="estilos/estilosP6.css">
</head>
<body>
    <div class="tabla-container">   
        <h2>PREGUNTA : 7</h2>
        <h3>7. En el rol director bancario, permita visualizar los montos existentes por departamento(agregados), dando la vuelta al resultado (CASE-WHEN).</h3>
            
        <?php 
            include "conexion.inc.php";                                   
        ?>
    </div>
    <?php
        $email = $_GET['email'];
        $sql3 = "SELECT * FROM persona WHERE email = '$email'";

        $resultado = mysqli_query($con, $sql3); 

        $fila = mysqli_fetch_array($resultado);

        $nombreCompleto = $fila['nombre'] . " " . $fila['paterno'] . " " . $fila['materno'];
        $tipoUsuario = $fila['tipoUsuario'];
        ?>


        <div class="tabla-container">
        <h3>USUARIO: <?php echo htmlspecialchars($tipoUsuario)?></h3>
        <h3>NOMBRE: <?php echo htmlspecialchars($nombreCompleto)?></h3>            
            
