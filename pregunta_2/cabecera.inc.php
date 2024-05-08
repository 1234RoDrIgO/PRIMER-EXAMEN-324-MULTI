<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PREGUNTA 2</title>
    <link rel="stylesheet" href="estilos/estilosP2.css">
</head>
<body>
    <div class="tabla-container">   
        <h2>PREGUNTA : 2</h2>
        <h3>2. Realice un ABC en PHP de las personas a cunetas bancarias, debe incluir la selección de la cuenta que la persona desee.</h3>
        <a href="index.php" class="boton-cerrar-sesion">CERRAR SESION</a>
        <?php 
            include "conexion.inc.php";                                   
        ?>
    </div>
    
    <?php
        $email = $_GET['email'];
        $sql1 = "SELECT nombre, paterno, materno FROM persona WHERE email = '$email'";


        $resultado = mysqli_query($con, $sql1); 

        $fila = mysqli_fetch_array($resultado);

        $nombreCompleto = $fila['nombre'] . " " . $fila['paterno'] . " " . $fila['materno'];
        ?>


        <div class="tabla-container">
            <h3>CLIENTE: <?php echo htmlspecialchars($nombreCompleto)?></h3>
            
            <table class="tabla-datos">
                <thead>
                    <tr>
                        <th>Número de Cuenta</th>
                        <th>Tipo de Cuenta</th>
                        <th>Monto</th>
                        <th>Cod. Depto.</th>
                        <th>Fecha de Creación</th>
                        <th>OPERACIONES</th>
                    </tr>
                </thead>
                <tbody>
            
