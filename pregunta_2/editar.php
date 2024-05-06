<?php
include "conexion.inc.php";

$idCuenta = $_GET["idCuenta"];

$sql = "SELECT * FROM cuenta WHERE idCuenta ='" .$idCuenta."'";
$resultado = mysqli_query($con, $sql);

$fila=mysqli_fetch_array($resultado);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/formulario.css">
    <title>Cambiar Datos</title>
</head>
<body>
    <div class="container">
        <h1>EDITA TUS DATOS</h1>
        <form action="guardaEdicion.php" method = "GET"> 
            <label>Identificador de Cuenta: </label>           
            <input type="text" name = "idCuenta" value="<?php echo $fila['idCuenta']?>" readonly/>
            <label>Nro. de Cuenta: </label>
            <input type="text" name = "nroCuenta" value="<?php echo $fila['nroCuenta']?>"/>
            <label>Tipo de Cuenta: </label>
            <input type="text" name = "tipoCuenta" value="<?php echo $fila['tipoCuenta']?>"/>
            <label>Monto Inicial: </label>
            <input type="text" name = "monto" value="<?php echo $fila['monto']?>"/>
            <label>Departamento: </label>
            <input type="text" name = "departamento" value="<?php echo $fila['departamento']?>"/>

            <input type="submit" name = "Guardar" value="GUARDAR"/>
            
        </form>
    </div>
</body>
</html>