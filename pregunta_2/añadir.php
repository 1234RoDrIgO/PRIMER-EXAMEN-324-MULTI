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
    <title>Añadir Cuenta</title>
</head>
<body>
    <div class="container">
        <h1>INTRODUCE TUS DATOS</h1>
        <form action="guardaCuentaAñadida.php" method = "GET"> 
            <label>Identificador de Usuario: </label>           
            <input type="text" name = "idUsuario" value="<?php echo $fila['idUsuario']?>" readonly/>
            <label>Nro. de Cuenta: </label>
            <input type="text" name = "nroCuenta" value=""/>
            <label>Tipo de Cuenta: </label>
            <input type="text" name = "tipoCuenta" value=""/>
            <label>Monto Inicial: </label>
            <input type="text" name = "monto" value=""/>
            <label>Departamento: </label>
            <input type="text" name = "departamento" value=""/>

            <input type="submit" name = "GuardarA" value="GUARDAR DATOS"/>
            
        </form>
    </div>
</body>
</html>